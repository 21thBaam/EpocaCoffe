function head(titulo){
    var head = document.getElementById("cabeza");
    head=`
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=0.5">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>${titulo}</title>
        <!--Icono pagina-->
        <link rel="shortcut icon" href="../images/icons/sun-icon.png">
        <!--Custom CSS-->
        <link rel="stylesheet" href="../css/style.css" type="text/css" />
        <!--Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Hepta+Slab:200,400&display=swap" rel="stylesheet"/>
        <!--Font Awesome-->
        <script src="https://kit.fontawesome.com/3b188834f1.js"></script>
        <!--Flex Box Grid-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css" />
    `;
    document.write(head);
}