// build-sprite.js (sprite + alias/fallbacks)
const fs = require('fs');
const path = require('path');

const ICONS_DIR = path.resolve(__dirname, '../iconos');
const DIST_DIR = path.resolve(__dirname, '../dist');
const SPRITE_FILE = path.join(DIST_DIR, 'sprites.svg');

if (!fs.existsSync(DIST_DIR)) fs.mkdirSync(DIST_DIR, { recursive: true });

const svgFiles = fs.readdirSync(ICONS_DIR).filter(f => f.endsWith('.svg'));
if (svgFiles.length === 0) {
  console.log(`No se encontraron archivos .svg en ${ICONS_DIR}`);
  process.exit(0);
}

// Helper para leer y extraer innerContent + viewBox
function parseSvgFile(filePath) {
  const content = fs.readFileSync(filePath, 'utf8');
  const normalized = content.replace(/fill="[^"]*"/g, 'fill="currentColor"');
  const innerMatch = normalized.match(/<svg[^>]*>([\s\S]*?)<\/svg>/i);
  const inner = innerMatch ? innerMatch[1] : normalized;
  const viewBoxMatch = normalized.match(/viewBox="([^"]*)"/i);
  const viewBox = viewBoxMatch ? viewBoxMatch[1] : '0 0 24 24';
  return { inner, viewBox };
}

// Agrupar por nombre base
const icons = {}; // { name: { base?: {inner,viewBox,filename}, lineal?: {...}, relleno?: {...} } }

svgFiles.forEach(file => {
  const baseName = path.basename(file, '.svg');
  let name = baseName;
  let variant = 'base';

  if (baseName.endsWith('--lineal')) {
    name = baseName.replace(/--lineal$/, '');
    variant = 'lineal';
  } else if (baseName.endsWith('--relleno')) {
    name = baseName.replace(/--relleno$/, '');
    variant = 'relleno';
  }

  if (!icons[name]) icons[name] = {};
  const parsed = parseSvgFile(path.join(ICONS_DIR, file));
  parsed.filename = baseName; // filename sin .svg
  icons[name][variant] = parsed;
});

// Selección de fallback: devuelve el objeto variante a usar como fuente
function selectFallback(variants, target) {
  // variants: { base?, lineal?, relleno? } (objects or undefined)
  if (target === 'lineal') {
    return variants.base || variants.relleno || variants.lineal || null;
  }
  if (target === 'relleno') {
    return variants.base || variants.lineal || variants.relleno || null;
  }
  if (target === 'base') {
    return variants.lineal || variants.relleno || variants.base || null;
  }
  return null;
}

// Construir símbolos: primero los reales, luego los alias faltantes
const symbols = [];

// Primero: símbolos reales (los que vienen de archivos)
for (const [name, variants] of Object.entries(icons)) {
  // Para cada variante existente, crear su símbolo con el id correspondiente
  if (variants.base) {
    const id = `icono-${variants.base.filename}`; // ej icono-cerrar
    symbols.push(`<symbol id="${id}" viewBox="${variants.base.viewBox}">${variants.base.inner}</symbol>`);
  }
  if (variants.lineal) {
    const id = `icono-${variants.lineal.filename}`; // ej icono-cerrar--lineal
    symbols.push(`<symbol id="${id}" viewBox="${variants.lineal.viewBox}">${variants.lineal.inner}</symbol>`);
  }
  if (variants.relleno) {
    const id = `icono-${variants.relleno.filename}`; // ej icono-cerrar--relleno
    symbols.push(`<symbol id="${id}" viewBox="${variants.relleno.viewBox}">${variants.relleno.inner}</symbol>`);
  }
}

// Segundo: generar alias para ids faltantes (asegurar que existan los 3 ids: icono-name, icono-name--lineal, icono-name--relleno)
for (const [name, variants] of Object.entries(icons)) {
  // helper para comprobar si ya existe un símbolo con ese id en la lista
  const hasId = id => symbols.some(s => s.includes(`id="${id}"`));

  // target: base -> id: icono-<name>
  const baseId = `icono-${name}`;
  if (!hasId(baseId)) {
    const src = selectFallback(variants, 'base');
    if (src) {
      symbols.push(`<symbol id="${baseId}" viewBox="${src.viewBox}">${src.inner}</symbol>`);
    }
  }

  // target: lineal -> id: icono-<name>--lineal
  const linealId = `icono-${name}--lineal`;
  if (!hasId(linealId)) {
    const src = selectFallback(variants, 'lineal');
    if (src) {
      symbols.push(`<symbol id="${linealId}" viewBox="${src.viewBox}">${src.inner}</symbol>`);
    }
  }

  // target: relleno -> id: icono-<name>--relleno
  const rellenoId = `icono-${name}--relleno`;
  if (!hasId(rellenoId)) {
    const src = selectFallback(variants, 'relleno');
    if (src) {
      symbols.push(`<symbol id="${rellenoId}" viewBox="${src.viewBox}">${src.inner}</symbol>`);
    }
  }
}

// Opcional: si querés también soportar lookups tipo "icono-<filename>" para archivos que no encajan en el esquema
// ya están creados arriba porque usamos filename para los reales.

// Generar el contenido final del sprite
const spriteContent = `<svg xmlns="http://www.w3.org/2000/svg" style="position:absolute;width:0;height:0;overflow:hidden">\n${symbols.join('\n')}\n</svg>`;
fs.writeFileSync(SPRITE_FILE, spriteContent, 'utf8');
console.log(`Sprite generado en: ${SPRITE_FILE}`);
