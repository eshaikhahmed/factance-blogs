function addToId(id, text){
    document.getElementById(id).textContent = text
}

/* Here you could write any code and it will not be executed */
const example = `
  <script>
    alert('hello world);
    function addToId(id, text){
      document.getElementById(id).textContent = text
    }
  </script>
  
  <div>
    <h1>Hello world</h1>
  </div>
  `

  addToId('text', example)

  const example2 = document.getElementById('text').innerHTML
  addToId('text_2', example2)