function body(site_name, opc){
    var cabezera = header(site_name);
    var pie = footer(opc);
    body = document.getElementById("test")
    body.insertAdjacentHTML( 'afterbegin', cabezera );
    body.insertAdjacentHTML( 'beforeend',  pie);
}

function header(site_name){
    var header = `
    <header id="main-header">
	
        <a id="logo-header" href="../index.html">
            <span class="site-name">${site_name}<span class="fas fa-sun"></span> </span>
        </a> <!-- / #logo-header -->

        <!-- / nav -->
        <nav style="float: right; font-weight: 200px">
            <ul>
                <li><a class="hide" href="../usuarios/usuario.php"> <i class="far fa-user fa-2x"></i> <span>Usuario</span> </a></li>
                <li><a class="hide1" href="../historial/vista_historial.php"> <i class="fas fa-shopping-cart fa-2x"></i> <span>Historial</span> </a></li>
                <li><a class="" href="../productos/productos.php"> <i class="fab fa-product-hunt fa-2x"></i> <span>Productos</span> </a></li>
            </ul>
        </nav>
    
    </header>`;
    return header;
}

function footer(opc){
    if(opc == 0){
        var footer = `
        <footer id="main-footer">
            <nav style="text-align: center">
                <ul>
                    <li>
                        <span style="font-weight: 200">
                            <a href="#"><i class="fab fa-mailchimp fa-2x"></i><span> GranosCampos@company.com</span></a>
                            <a href="#"><i class="fas fa-phone fa-2x"></i><span> 8300-XXXX</span></a>
                        </span>
                    </li>
                </ul>
            </nav>
        </footer>`;
    }else{
        var footer =`
        <footer id="main-footerr">
            <nav style="text-align: center">
                <ul>
                    <li>
                        <span style="font-weight: 200">
                            <a href="#"><i class="fab fa-mailchimp fa-2x"></i><span> GranosCampos@company.com</span></a>
                            <a href="#"><i class="fas fa-phone fa-2x"></i><span> 8300-XXXX</span></a>
                        </span>
                    </li>
                </ul>
            </nav>
        </footer>`;
    }
    return footer;
}