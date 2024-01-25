<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FSTT</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
            body {
  margin: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100hv;
  background: url(https://img.freepik.com/vecteurs-libre/fond-bleu-flou-brillant_1034-804.jpg?w=740&t=st=1706155131~exp=1706155731~hmac=373a8a3306b1a3d9a1756536dce576704b9c15dabd9c74614286305d5db28e3b);
  background-size:cover;
}

.image-container {
  position: relative;
  text-align: center;
}

.centered-text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: rgba(255, 255, 255, 0.7);
  padding: 20px;
  font-family: Freestyle Script, sans-serif; /* Remplacez 'Your Selected Font' par le nom de votre police */
  font-size: 80px;
  color: #333;
  text-align: center;
}


.centered-text p {
  margin: 0;
  width: 1000px; /* Supprimer la marge par défaut du paragraphe */
}
.login-button {
  position: absolute;
  bottom: 140px; /* Ajustez la position du bouton par rapport au bas de l'image */
  left: 50%;
  transform: translateX(-50%);
  background-color: #007bff;
  color: #fff;
  padding: 10px 20px;
  font-size: 16px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s; /* Ajout de l'effet de transition */
}
.login-button:hover {
  background-color: #0056b3; /* Couleur différente au survol */
}
.button-container {
      margin-top: 20px;
      display: flex;
      justify-content: space-between;
    }


.custom-column {
    width: 33%;
    box-sizing: border-box;
    padding: 20px;
}

.cta-container {
    position: relative;
    cursor: pointer;
    overflow: hidden;
}

.cta-bg-wrapper {
    position: relative;
}

.cta-bg {
    width: 100%;
    height: 200px;
    background-size: cover;
}

.cta-bg-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    pointer-events: none;
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .cta-container:hover .cta-bg-overlay {
      opacity: 1;
    }

.cta-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: #fff;
}

.cta-title {
    margin-bottom: 10px;
    font-size: 24px;
}

.cta-description {
    font-size: 14px;
}

.new {
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: Arial Rounded MT Bold, sans-serif;
      font-size: 30px;
      text-decoration: rgb(62, 115, 148) wavy underline;
    }
    .new2 {
     margin-left: 43%;
      font-family: Arial Rounded MT Bold, sans-serif;
      font-size: 30px;
      text-decoration: rgb(62, 115, 148) wavy underline;
    }
    .announcements-section {
        margin-left: 22%;
        display: flex;
        justify-content: space-between;
}

.announcement {
  position: relative;
  width: 200px;
  height: 200px;
  margin: 10px;
  border: 1px solid #ddd;
  transition:background-color transform 0.3s;
  display: flex;
  text-align: center;
  flex-direction: column;
  z-index: 0;


}
.content-annoucement{
    color: #eef1f2;
    text-align: center;
    font-size: 30px;
    z-index: 1;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

.announcement:hover {
  transform: scale(1.05); /* Enlarge on hover */
}

.announcement::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(-45deg, #3f6873, #2dbce8, #3f6873, #2dbce8);
  background-size: 400% 400%;
  animation: gradientAnimation 4s infinite;

}



@keyframes gradientAnimation {
  0% {
    background-position: 0% 0%;
  }
  100% {
    background-position: 400% 400%;
  }
}
.read-more {
    display: inline-block;
    margin-top: 30px;
    color: #0056b3;
    text-decoration: none;
    font-weight: bold;
  }


  .buttons {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    flex-direction: column;
    width: 100% ;
  }

  .rectangle {
    width: 200px;
    height: 100px;
    background: linear-gradient(135deg, #3498db, #2980b9);
    border-radius: 20px;
    margin-bottom: 70px; /* Espacement vertical entre les rectangles */
    position: relative;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Ombre générale */
    width: 80% ;
    transition: box-shadow 0.3s ease-in-out;
    animation: pulse 2s infinite;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .rectangle::before,
  .rectangle::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 50%;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 10px 10px 0 0;
  }

  .rectangle::before {
    top: 0;
    left: 0;
    transform: skewX(-45deg);
    transform-origin: bottom left;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3); /* Ombre supérieure */
  }

  .rectangle::after {
    bottom: 0;
    right: 0;
    transform: skewX(45deg);
    transform-origin: top right;
    box-shadow: 0 -5px 15px rgba(0, 0, 0, 0.3); /* Ombre inférieure */
  }

  .rectangle:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4); /* Ombre plus prononcée au survol */
    animation: none;
}
@keyframes pulse {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.1);
    }
    100% {
        transform: scale(1);
    }
}


  .content {
    position: relative; /* Ajout de la position relative au conteneur */
}

.LABEL {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1;
    background-color: rgba(242, 245, 246, 0.7);
    padding: 20px;
    color: #333;
    text-align: center;
    font-family: 'Freestyle Script', sans-serif;
    font-size: 210%;

}

.logo {
    z-index: 0;
}


* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Open sans",sans-serif;
}
.square{
    position: relative;
    width: 550px;
    height: 550px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0px 50px;
    margin-left: 25%;
}
.square span;:nth-child(1){
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 2px solid white;
    border-radius: 38% 62% 63% 37% / 41% 44% 56% 59%;
    transition: 0.5s;
    animation: animate 6s linear infinite;
    pointer-events: none;
    box-shadow: 0 0 12px black;
}
.square:hover span:nth-child(1){
    border: none;
    background: #007bff;
}
.square span:nth-child(2){
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 2px solid white;
    border-radius: 38% 62% 63% 37% / 41% 44% 56% 59%;
    transition: 0.5s;
    animation: animate 4s linear infinite;
    pointer-events: none;
    box-shadow: 0 0 12px black;
}
.square:hover span:nth-child(2){
    border: none;
    background: #007bff;
}
.square span:nth-child(3){
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 2px solid white;
    border-radius: 38% 62% 63% 37% / 41% 44% 56% 59%;
    transition: 0.5s;
    animation: animate2 10s linear infinite;
    pointer-events: none;
    box-shadow: 0 0 12px black;
}
.square:hover span:nth-child(3){
    border: none;
    background: #007bff;
}

@keyframes animate {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

@keyframes animate2 {
    0% {
        transform: rotate(360deg);
    }
    100% {
        transform: rotate(0deg);
    }
}
.content{
    position: relative;
    padding: 40px 60px;
    color: white;
    text-align: center;
    transition: 0.5s;
    z-index: 1000;
}
.content a {
    position: relative;
    display: inline-block;
    margin-top: 10px;
    border: 2px solid white;
    padding: 6px 18px;
    text-decoration: none;
    color: white;
    font-weight: 600;
    border-radius: 73% 27% 44% 56% / 49% 44% 56% 51%;
}
.content a:hover{
    background: white;
    color: black;
}
B{
    background-color: rgba(34, 40, 43, 0.7);
    font-size: 40px;
    font-family: Freestyle Script,sans-serif;
}
h4{
    font-size: 100%;
    margin-left: 35%;
    margin-right: 35%;
    background-color: #6a7fa3;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif
}
        </style>


<link rel='stylesheet' id='wp-block-library-css' href='https://fstt.ac.ma/Portail2023/wp-includes/css/dist/block-library/style.min.css?ver=6.4.2' media='all' />
<link rel='stylesheet' id='eae-css-css' href='https://fstt.ac.ma/Portail2023/wp-content/plugins/addon-elements-for-elementor-page-builder/assets/css/eae.min.css?ver=1.12.2' media='all' />
<link rel='stylesheet' id='font-awesome-4-shim-css' href='https://fstt.ac.ma/Portail2023/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css?ver=1.0' media='all' />
<link rel='stylesheet' id='font-awesome-5-all-css' href='https://fstt.ac.ma/Portail2023/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css?ver=1.0' media='all' />
<link rel='stylesheet' id='vegas-css-css' href='https://fstt.ac.ma/Portail2023/wp-content/plugins/addon-elements-for-elementor-page-builder/assets/lib/vegas/vegas.min.css?ver=2.4.0' media='all' />
<link rel='stylesheet' id='titan-adminbar-styles-css' href='https://fstt.ac.ma/Portail2023/wp-content/plugins/anti-spam/assets/css/admin-bar.css?ver=7.3.4' media='all' />
<link rel='stylesheet' id='hello-elementor-theme-style-css' href='https://fstt.ac.ma/Portail2023/wp-content/themes/hello-elementor/theme.min.css?ver=2.6.1' media='all' />
<link rel='stylesheet' id='elementor-frontend-legacy-css' href='https://fstt.ac.ma/Portail2023/wp-content/plugins/elementor/assets/css/frontend-legacy.min.css?ver=3.12.0' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='https://fstt.ac.ma/Portail2023/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.12.0' media='all' />
<link rel='stylesheet' id='elementor-pro-css' href='https://fstt.ac.ma/Portail2023/wp-content/plugins/elementor-pro/assets/css/frontend.min.css?ver=3.7.1' media='all' />
<link rel='stylesheet' id='elementor-global-css' href='https://fstt.ac.ma/Portail2023/wp-content/uploads/elementor/css/global.css?ver=1683541985' media='all' />
<link rel='stylesheet' id='elementor-post-8-css' href='https://fstt.ac.ma/Portail2023/wp-content/uploads/elementor/css/post-8.css?ver=1687545230' media='all' />


 </head>
 <body class="antialiased">
  <div data-elementor-type="header" data-elementor-id="8" class="elementor elementor-8 elementor-location-header">
        <section class="has_eae_slider elementor-section elementor-top-section elementor-element elementor-element-7566b78 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="7566b78" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-row">
                    <div class="has_eae_slider elementor-column elementor-col-66 elementor-top-column elementor-element elementor-element-6313f5a" data-id="6313f5a" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                                <div class="elementor-element elementor-element-fa1034d elementor-icon-list--layout-inline elementor-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id="fa1034d" data-element_type="widget" data-widget_type="icon-list.default">
                                    <div class="elementor-widget-container">
                                        <ul class="elementor-icon-list-items elementor-inline-items">
                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                <span class="elementor-icon-list-text"> 📧	administration.fstt@uae.ac.ma</span>
                                            </li>
                                            <li class="elementor-icon-list-item elementor-inline-item">
                                                <span class="elementor-icon-list-text"> 📞  + 212 (0) 5 39 39 39 54 / 55</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                         </div>
                    </div>
                    <div class="has_eae_slider elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-50ac9af" data-id="50ac9af" data-element_type="column" id="headmedia" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                                <section class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-8dd1e3d elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="8dd1e3d" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-row">
                                            <div class="has_eae_slider elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-950c4ed" data-id="950c4ed" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-bb419d1 elementor-shape-rounded elementor-grid-0 e-grid-align-center elementor-widget elementor-widget-social-icons" data-id="bb419d1" data-element_type="widget" data-widget_type="social-icons.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-social-icons-wrapper elementor-grid">
                                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-094775b" href="https://www.facebook.com/fstt.ac.ma?mibextid=LQQJ4d" target="_blank"><span class="elementor-screen-only">Facebook</span>ⓕ</a>
                                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-bc1e7c0" href="https://instagram.com/fsttanger?igshid=Mzc1MmZhNjY=" target="_blank"><span class="elementor-screen-only">Instagram</span>insta</a>
                                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-repeater-item-dd3c08f" href="https://www.linkedin.com/school/fsttanger/" target="_blank"><span class="elementor-screen-only">Linkedin</span>🇮🇳</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="has_eae_slider elementor-section elementor-top-section elementor-element elementor-element-008ff9b elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="008ff9b" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-row">
                    <div class="has_eae_slider elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-85236fa" data-id="85236fa" data-element_type="column">
                        <div class="elementor-column-wrap elementor-element-populated">
                            <div class="elementor-widget-wrap">
                                <section class="has_eae_slider elementor-section elementor-inner-section elementor-element elementor-element-d58ef01 elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d58ef01" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-row">
                                            <div class="has_eae_slider elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-6633cf3" data-id="6633cf3" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-dacda71 elementor-widget elementor-widget-image" data-id="dacda71" data-element_type="widget" data-widget_type="image.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-image">
                                                                    <a href="https://fstt.ac.ma/Portail2023"><img width="800" height="299" src="https://fstt.ac.ma/Portail2023/wp-content/uploads/2023/03/fst-1024x383.png" class="attachment-large size-large wp-image-15" alt="" srcset="https://fstt.ac.ma/Portail2023/wp-content/uploads/2023/03/fst-1024x383.png 1024w, https://fstt.ac.ma/Portail2023/wp-content/uploads/2023/03/fst-300x112.png 300w, https://fstt.ac.ma/Portail2023/wp-content/uploads/2023/03/fst-768x287.png 768w, https://fstt.ac.ma/Portail2023/wp-content/uploads/2023/03/fst-1536x574.png 1536w, https://fstt.ac.ma/Portail2023/wp-content/uploads/2023/03/fst-2048x766.png 2048w" sizes="(max-width: 800px) 100vw, 800px" />								</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="has_eae_slider elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1a618f0 elementor-hidden-tablet" data-id="1a618f0" data-element_type="column">
                                            </div>
                                            <div class="has_eae_slider elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-205b773" data-id="205b773" data-element_type="column">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        <div class="elementor-element elementor-element-9273aa6 elementor-widget__width-initial elementor-widget elementor-widget-image" data-id="9273aa6" data-element_type="widget" data-widget_type="image.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="elementor-image">
                                                                    <a href="https://www.uae.ma"><img width="800" height="232" src="https://fstt.ac.ma/Portail2023/wp-content/uploads/2023/03/logo-uae-1024x297.png" class="attachment-large size-large wp-image-3712" alt="" srcset="https://fstt.ac.ma/Portail2023/wp-content/uploads/2023/03/logo-uae-1024x297.png 1024w, https://fstt.ac.ma/Portail2023/wp-content/uploads/2023/03/logo-uae-300x87.png 300w, https://fstt.ac.ma/Portail2023/wp-content/uploads/2023/03/logo-uae-768x222.png 768w, https://fstt.ac.ma/Portail2023/wp-content/uploads/2023/03/logo-uae-1536x445.png 1536w, https://fstt.ac.ma/Portail2023/wp-content/uploads/2023/03/logo-uae-2048x593.png 2048w" sizes="(max-width: 800px) 100vw, 800px" />								</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

        @yield('content')
 </body>
</html>
