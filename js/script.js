var app = new Vue({
    el: '#app',
    data: {
      message: 'Hello Vue!',
      cars : [],
    },
    created() {
        // ho dovuto resettare le porte su mamp, all'inizio non trovava le api ma facendo vari tentativi il problema era la cartella "boolean" di troppo nel percorso 
        axios.get('http://localhost:8888//php-snacks-b1/database/controller.php').then((result) => {
          console.log(result.data.result);
          this.cars = result.data.result;
        }).catch((error) => { console.log(error); });
      }
  })