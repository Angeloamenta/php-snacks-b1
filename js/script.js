var app = new Vue({
    el: '#app',
    data: {
      message: 'Hello Vue!',
      cars : [],
      arrayCars : [],
      selected: "",
    },
    created() {
        // ho dovuto resettare le porte su mamp, all'inizio non trovava le api ma facendo vari tentativi il problema era la cartella "boolean" di troppo nel percorso 
        axios.get('http://localhost:8888//php-snacks-b1/database/controller.php').then((result) => {
          console.log(result.data.result);
          this.cars = result.data.result;
          this.arrayCars = this.cars
        }).catch((error) => { console.log(error); });

        
    },
    methods: {
        filtroArray() {
          this.arrayCars = this.cars.filter(car => car.colore === this.selected)
          console.log("ciao");
        }
    }
  })