var m_oculto = 1;
var m_crud_oculto = 1;

		function menu_movimiento_crud(){
			if (m_crud_oculto == 0){
				document.getElementById("menu_crud").style.left = '-200px';
				document.getElementById("icon_flechaDerecha_crud").style.display = 'none';
				document.getElementById("icon_menu_crud").style.display = 'inline';
				document.getElementById("menu_movimiento_crud").style.transform = 'rotateY(360deg)';
				m_crud_oculto = 1;
			} else if (m_crud_oculto == 1){
				document.getElementById("menu_crud").style.left = '1%';
				document.getElementById("icon_flechaDerecha_crud").style.display = 'inline';
				document.getElementById("icon_menu_crud").style.display = 'none';
				document.getElementById("menu_movimiento_crud").style.transform = 'rotateY(180deg)';
				m_crud_oculto = 0;
			}
		}
		function mover_menu(){
			if (m_oculto == 0){
				//$('.content_menu').animate({ top: '-53%'});
				document.getElementById("ul_movimiento_menu").style.top = '-70%';
				document.getElementById("movimiento_menu").style.padding = '20%';
				//document.getElementById("movimiento_menu").style.paddingBottom = '2%';
				document.getElementById("movimiento_menu").style.margin = '74% auto';
				document.getElementById("movimiento_menu").style.transform = 'rotateX(360deg)';
				m_oculto = 1;
			} else if (m_oculto == 1){
				document.getElementById("ul_movimiento_menu").style.top = '0%';
				document.getElementById("movimiento_menu").style.padding = '3%';
				document.getElementById("movimiento_menu").style.paddingBottom = '3%';
				document.getElementById("movimiento_menu").style.margin = '3% auto';
				document.getElementById("movimiento_menu").style.transform = 'rotateX(180deg)';
				m_oculto = 0;
			}
		}
		function cambio_tamano(){
		if (screen.width>1400) {
			document.getElementById("ul_movimiento_menu").style.top = '0%';
			m_oculto = 0;
		} else if (screen.width<1400) {
			document.getElementById("ul_movimiento_menu").style.top = '-70%';
			document.getElementById("movimiento_menu").style.padding = '20%';
			document.getElementById("movimiento_menu").style.margin = '74% auto';
			document.getElementById("movimiento_menu").style.transform = 'rotateX(380deg)';
				m_oculto = 1;
		}

		}



/*Login tab*/

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;

    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    tabcontent = document.getElementsByClassName("tabcontent1");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

