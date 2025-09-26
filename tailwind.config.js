/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
    './vendor/mviyo/your-package-name/resources/views/**/*.blade.php',
  ],
  safelist: [
    // === Base ===
    'inline-flex', 'items-center', 'justify-center',
    'font-medium', 'transition-all', 'duration-150', 'ease-in-out',
    'focus:outline-none', 'm-1',  'cursor-poiner', 'dark:cursor-pointer', 'disabled:opacity-50', 'dark:disabled:opacity-50', 'disabled:cursor-not-allowed', 'dark:disabled:cursor-not-allowed', 'disabled:pointer-events-none', 'dark:disabled:pointer-events-none',

    // === Default & Variants ===
    'text-zinc-800', 'border', 'border-zinc-200', 'border-b-zinc-300/80',
    'shadow-sm', 'hover:bg-zinc-100/50', 'active:bg-zinc-200/70',
    'active:shadow-inner', 'active:translate-y-[1px]',
    'dark:bg-zinc-600', 'dark:text-white', 'dark:border-zinc-500',
    'dark:border-b-zinc-500', 'dark:hover:bg-zinc-700/70',
    'dark:active:bg-zinc-800', 'dark:active:shadow-inner',
    'dark:active:translate-y-[1px]',
    'disabled:opacity-50', 'dark:disabled:opacity-50',
    'disabled:cursor-default', 'disabled:pointer-events-none',

    // === Solid, Outline, Ghost & Subtle Variants ===
    'bg-blue-600','hover:bg-blue-700/70','active:bg-blue-800',
    'bg-gray-600','hover:bg-gray-700/70','active:bg-gray-800',
    'bg-green-600','hover:bg-green-700/70','active:bg-green-800',
    'bg-red-600','hover:bg-red-700/70','active:bg-red-800',
    'bg-yellow-600','hover:bg-yellow-600/70','active:bg-yellow-700',
    'bg-cyan-600','hover:bg-cyan-700/70','active:bg-cyan-800',
    'bg-white','text-gray-800','border-gray-300','hover:bg-gray-200/50','active:bg-gray-300',
    'bg-gray-900','hover:bg-black/50','active:bg-gray-800',
    'bg-transparent',
    'border-blue-600','text-blue-600','hover:bg-blue-800/5','active:bg-blue-800/10',
    'border-gray-600','text-gray-600','hover:bg-gray-800/5','active:bg-gray-800/10',
    'border-green-600','text-green-600','hover:bg-green-800/5','active:bg-green-800/10',
    'border-red-600','text-red-600','hover:bg-red-800/5','active:bg-red-800/10',
    'border-yellow-600','text-yellow-600','hover:bg-yellow-800/5','active:bg-yellow-800/10',
    'border-cyan-600','text-cyan-600','hover:bg-cyan-800/5','active:bg-cyan-800/10',
    'border-gray-900','text-gray-900','hover:bg-gray-900/10','active:bg-gray-900/20',
    'text-zinc-800','hover:bg-zinc-800/5','dark:text-white','dark:hover:bg-white/15','dark:active:bg-zinc-800',
    'text-zinc-500','hover:text-zinc-800','dark:text-zinc-400','dark:hover:text-white',

    // === Sizes ===
    'px-2.5','py-1','text-xs','px-3','py-1.5','text-sm','px-4','py-2','px-5','py-2.5','text-base','px-6','py-3','text-lg',

    // === Shapes ===
    'w-full','rounded-none','rounded-sm','rounded-md','rounded-lg','rounded-xl','rounded-full','aspect-square','p-2',

    // === States ===
    'opacity-50','cursor-not-allowed','cursor-pointer',

    // === Spinner ===
    'animate-spin','h-5','w-5','text-current','opacity-25','opacity-75',

    // === Icon spacing ===
    'mr-2','ml-2',

    // === Opacity ===
    'opacity-10',

    // Absolute
    'absolute'
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
