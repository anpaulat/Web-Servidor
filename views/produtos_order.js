
$(document).ready(function () {
  $('#myTable').DataTable();


  let produtos = [
    {
      "id": 1,
      "descricao": "Pizza de Calabresa",
      "valor": 12.00,

      "categoria": "Salgada",
      "ingredientes":[
        "Queijo","Calabresa","Molho de Tomate","Azeitona"
      ]
    },
    {
      "id": 2,
      "descricao": "Pizza de Bacon",
      "valor": 14.00,
      "categoria": "Salgada",
      "ingredientes":[
        "Queijo","Bacon","Molho de Tomate","Azeitona"
      ]
    },
    {
      "id": 3,
      "descricao": "Pizza de 4 Queijos",
      "valor": 15.00,

      "categoria": "Salgada",
      "ingredientes":[
        "Parmesão","Gorgonzola","Cheddar","Brie","Molho de Tomate","Azeitona"
      ]
    },
    {
      "id": 4,
      "descricao": "Pizza de 5 Queijos",
      "valor": 15.36,

      "categoria": "Salgada",
      "ingredientes":[
        "Parmesão","Gorgonzola","Cheddar","Brie","Gouda","Molho de Tomate","Azeitona"
      ]
    },
    {
      "id": 5,
      "descricao": "Pizza de Brocolli",
      "valor": 13.50,

      "categoria": "Salgada",
      "ingredientes":[
        "Queijo","Brocolli","Molho de Tomate","Azeitona"
      ]
    },
    {
      "id": 6,
      "descricao": "Pizza de Mignon na Manteiga",
      "valor": 12.30,

      "categoria": "Salgada",
      "ingredientes":[
        "Mignon","Queijo","Molho de Tomate","Azeitona"
      ]
    },
    {
      "id": 7,
      "descricao": "Pizza de Pepperoni",
      "valor": 13.00,

      "categoria": "Salgada",
      "ingredientes":[
        "Queijo","Pepperoni","Molho de Tomate","Azeitona"
      ]
    },
    {
      "id": 8,
      "descricao": "Pizza Americana",
      "valor": 15.20,

      "categoria": "Salgada",
      "ingredientes":[
        "Batata palha","Salsicha","Molho de Tomate","Azeitona"
      ]
    },
    {
      "id": 9,
      "descricao": "Pizza Portuguesa",
      "valor": 14.20,

      "categoria": "Salgada",
      "ingredientes":[
        "Pimentao","Carne","Molho de Tomate","Azeitona"
      ]
    },
    {
      "id": 10,
      "descricao": "Pizza á Moda da Casa",
      "valor": 16.50,

      "categoria": "Salgada",
      "ingredientes":[
        "Frango","Pimentão","Molho de Tomate","Azeitona"
      ]
    },
    {
      "id": 11,
      "descricao": "Pizza do Chefe",
      "valor": 12.00,

      "categoria": "Salgada",
      "ingredientes":[
        "Vinagrete","Frango","Molho de Tomate","Azeitona"
      ]
    },
    {
      "id": 12,
      "descricao": "Pizza de Palmito",
      "valor": 12.50,

      "categoria": "Salgada",
      "ingredientes":[
        "Queijo","Palmito","Molho de Tomate","Azeitona"
      ]
    },
    {
      "id": 13,
      "descricao": "Pizza de Frango",
      "valor": 14.25,

      "categoria": "Salgada",
      "ingredientes":[
        "Queijo","Frango","Molho de Tomate","Azeitona"
      ]
    },
    {
      "id": 14,
      "descricao": "Pizza de Frango com Catupiry",
      "valor": 13.00,

      "categoria": "Salgada",
      "ingredientes":[
        "Frango","Catupiry","Molho de Tomate","Azeitona"
      ]
    },
    {
      "id": 15,
      "descricao": "Pizza de Cheddar com Bacon",
      "valor": 19.00,

      "categoria": "Salgada",
      "ingredientes":[
        "Cheddar","Bacon","Molho de Tomate","Azeitona"
      ]
    },
    {
      "id": 16,
      "descricao": "Pizza de Cheddar com Calabresa",
      "valor": 16.50,

      "categoria": "Salgada",
      "ingredientes":[
        "Cheddar","Calabresa","Molho de Tomate","Azeitona"
      ]
    },
    {
      "id": 17,
      "descricao": "Pizza de Chocolate Preto",
      "valor": 15.50,

      "categoria": "Doce",
      "ingredientes":[
        "Chocolate Preto","Confete"
      ]
    },
    {
      "id": 18,
      "descricao": "Pizza de Chocolate Branco",
      "valor": 14.50,

      "categoria": "Doce",
      "ingredientes":[
        "Chocolate Branco","Confete"
      ]
    },
    {
      "id": 19,
      "descricao": "Pizza de Confete",
      "valor": 13.50,

      "categoria": "Doce",
      "ingredientes":[
        "Chocolate Preto","confete"
      ]
    },
    {
      "id": 20,
      "descricao": "Pizza de Morango",
      "valor": 15.00,

      "categoria": "Doce",
      "ingredientes":[
        "Chocolate Branco","morango"
      ]
    },
    {
      "id": 21,
      "descricao": "Pizza King Kong",
      "valor": 14.00,

      "categoria": "Doce",
      "ingredientes":[
        "Banana","Doce de leite"
      ]
    },
    {
      "id": 22,
      "descricao": "Pizza Amsterdã",
      "valor": 16.00,

      "categoria": "Doce",
      "ingredientes":[
        "Doce de Leite","Paçoca"
      ]
    },
    {
      "id": 23,
      "descricao": "Pizza de Brigadeiro",
      "valor": 16.25,

      "categoria": "Doce",
      "ingredientes":[
        "Chocolate Preto","Granulado Preto"
      ]
    },
    {
      "id": 24,
      "descricao": "Pizza de Sorvete",
      "valor": 15.20,

      "categoria": "Doce",
      "ingredientes":[
        "sorvete de Flocos","Frutas"
      ]
    },
    {
      "id": 25,
      "descricao": "Pizza de Romeo e Julieta",
      "valor": 13.00,

      "categoria": "Doce",
      "ingredientes":[
        "Goiabada","Queijo"
      ]
    },
    {
      "id": 26,
      "descricao": "Pizza de Serenata do Amor",
      "valor": 14.20,

      "categoria": "Doce",
      "ingredientes":[
        "Chocolate Preto","Serenata do Amor"
      ]
    },
    {
      "id": 27,
      "descricao": "Pizza de Sensação",
      "valor": 15.50,

      "categoria": "Doce",
      "ingredientes":[
        "Chocolate Preto","Morango"
      ]
    },
    {
      "id": 28,
      "descricao": "Pizza de Beijinho",
      "valor": 13.20,

      "categoria": "Doce",
      "ingredientes":[
        "Chocolate Branco","Coco"
      ]
    },
    {
      "id": 29,
      "descricao": "Pizza de Nós dois",
      "valor": 15.50,

      "categoria": "Doce",
      "ingredientes":[
        "Chocolate Branco","Chocolate Preto"
      ]
    },
    {
      "id": 30,
      "descricao": "Pizza de Paçoca",
      "valor": 15.00,

      "categoria": "Doce",
      "ingredientes":[
        "Chocolate","Paçoca"
      ]
    },

  ];


  function listaTabela() {

    var dataSet = [];
    $.each(produtos, function (index, data) {
      dataSet.push([
        data.id,
        data.descricao,
        data.valor,
        data.categoria,
        data.id
      ]);
    });




   var table =  $("#table_produtos").DataTable({
      data: dataSet,
      "columnDefs": [{
        "targets": -1,
        "data": null,
        "defaultContent": `<button type='button' class='btn btn-primary fa fa-search' data-toggle='modal' data-target='#modalCadastro'></button>`
      }],
      columns: [
        { title: 'Id' },
        { title: 'Descricao' },
        { title: 'Valor (R$)' },
        { title: 'Categoria' },
        { title: 'Opções' }
      ]

    });
    
    function pegarDados(id) {
      for(var i = 0; i < produtos.length; i++){
        if (id == produtos[i].id){
           return (produtos[i].ingredientes)
        }else{
          
        }
      }
    }
    function pegarNome(id) {
      for(var i = 0; i < produtos.length; i++){
        if (id == produtos[i].id){
           return (produtos[i].descricao)
        }else{
          
        }
      }
    }

    $('#table_produtos tbody').on('click', 'button', function () {
      $('#nomePizza .nome').remove();
      $('#ingredientes .ing').remove();
      var data = table.row($(this).parents('tr')).data();
      var id = data[0];
  
       var ingredienteDados = pegarDados(id)
       var nomePizza = pegarNome(id)

       $('#nomePizza').append(`<h2 class="modal-title nome">`+nomePizza+`</h2>`)

       $('#btn-cart').val(data[0]) 
       console.log( $('#btn-cart').val())

       for(var i = 0; i < ingredienteDados.length; i++){
         $('#ingredientes').append(`<h4 class="modal-title ing">1x `+ingredienteDados[i]+`</h4>`)
       }
    });



  }
   

  listaTabela();



});


