 /*
	para registrar sw ejecutar el codigo en el cliente html:
	
	if ('serviceWorker' in navigator) {
		navigator.serviceWorker.register('./sw.js')
		.then(reg => console.log('Registro de SW exitoso', reg))
		.catch(err => console.warn('Error al tratar de registrar el sw', err))
	}
//asignar un nombre y versión al cache
 */
 
var CACHE_NAME = 'v1_cache_votacion';
var urlsToCache = [
    './',
	'../images/favicon.ico',
	'../images/icono64.ico',
	'../images/icono128.ico',
	'../images/icono144.ico',
	'../css/bootstrap.min.css',
  '../js/jquery-3.4.0.min.js',
  '../js/bootstrap.min.js',
	'../formulario/Offline.php',
	'../formulario/manifest.json',
	'../formulario/sw.js'
  ];

	
//durante la fase de instalación, generalmente se almacena en caché los activos estáticos
self.addEventListener('install', e => {
  e.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => {
        return cache.addAll(urlsToCache)
          .then(() => self.skipWaiting())
      })
      .catch(err => console.log('Falló registro de cache', err))
  )
})

//una vez que se instala el SW, se activa y busca los recursos para hacer que funcione sin conexión
self.addEventListener('activate', e => {
  const cacheWhitelist = [CACHE_NAME]
  e.waitUntil(
    caches.keys()
      .then(cacheNames => {
        return Promise.all(
          cacheNames.map(cacheName => {
            //Eliminamos lo que ya no se necesita en cache
            if (cacheWhitelist.indexOf(cacheName) === -1) {
              return caches.delete(cacheName)
            }
          })
        )
      })
      // Le indica al SW activar el cache actual
      .then(() => self.clients.claim())
  )
})

//cuando el navegador recupera una url
/*self.addEventListener('fetch', e => {
  //Responder ya sea con el objeto en caché o continuar y buscar la url real

		e.respondWith(
			caches.match(e.request)
			.then(res => {
				if (res) {
				  //recuperar del cache
				  return res
				}
				//recuperar de la petición a la url
				return fetch(e.request)
			})
		)

})*/
		
self.addEventListener("fetch", function(event) {
  event.respondWith(
    fetch(event.request).catch(function() {
      return caches.match(event.request).then(function(response) {
        return response || caches.match("./Offline.php");
      });
    })
  );
});

