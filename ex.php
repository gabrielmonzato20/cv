<DOCTYPE html5>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.10/dist/vue.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js"integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>
<head>
<body>

<div class="navbar navbar-dark bg-dark shadow-sm">
<div class="container d-flex justify-content-between">
<div class="navbar-nav-scroll">

    <ul class="navbar-nav bd-navbar-nav flex-row">
      <li class="nav-item">
        <a class="nav-link " href="/">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/">Habilidades</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/">Certificados</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/">Formação</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/">Experiencia</a>
      </li>
      </ul>
</div>
</div>
</div>

<main role="main" id="info">
	<div class="container">
    <div class="row align-items-center">
    	<h1 class="mb-3 bd-text-red">Informações</h1>
    	<p class="lead mb-4">
    		Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
    	</p>
    </div>
</div>
</main>
<main role="main" id="Habilidades">
	<div class="container">
    <div class="row align-items-center">
    	<h1 class="mb-3 bd-text-red">Habilidades</h1>
    	<style type="text/css">
    		.skills ul{
    			width: 800px;
    		}
    		.barra_tot{
    			width: 100%;
    			background: white;
    			overflow: hidden;
    			padding: ;
    		}
    		.progresso{
    			float: left;
    			padding: 15px;
    		}
    		.porcentagem{
    			float: right;
    		}

    	</style>
         <div class="col-md-12 skills">
         	<ul  class="list-group">
         	 <li class="list-group-item" v-for="habi in habilidades">
         	 	<div class="titulo">{{habi.nome}}</div>
         	 	<div class="barra_tot" >
         	 		<div class="progresso" v-bind:style = "{background:cor,width:habi.porcentagen+'%'}"></div>
         	 		<span class="porcentagem">{{habi.porcentagen}}%</span>
         	 	</div>
         	 </li>
         	</ul>
         </div>
    </div>
   
</div>
</main>
<main role="main" id="certificados">
	<div class="container">
    <div class="row align-items-center">
    	<h1 class="mb-3 bd-text-red">Certificados</h1>
   <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="https://www.cursoemvideo.com/wp-content/uploads/2018/08/992-90923.jpeg" data-holder-rendered="true">
                <div class="card-body">
                  <p class="card-text">Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" rota="https://www.cursoemvideo.com/wp-content/uploads/2018/08/992-90923.jpeg">Ver</button>
                 
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="https://www.cursoemvideo.com/wp-content/uploads/2018/07/1091-90923.jpeg" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text"></p>
                  <p class="card-text">Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional. No entanto, esse conteúdo é um pouco maior.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" rota="https://www.cursoemvideo.com/wp-content/uploads/2018/07/1091-90923.jpeg">Ver</button>
                      
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="https://www.cursoemvideo.com/wp-content/uploads/2018/07/2423-90923.jpeg" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text">Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional. No entanto, esse conteúdo é um pouco maior.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" rota="https://www.cursoemvideo.com/wp-content/uploads/2018/07/2423-90923.jpeg">Ver</button>
                     
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="https://www.cursoemvideo.com/wp-content/uploads/2018/07/2440-90923.jpeg" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text">Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional. No entanto, esse conteúdo é um pouco maior.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" rota="https://www.cursoemvideo.com/wp-content/uploads/2018/07/2440-90923.jpeg">Ver</button>
                      
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="https://www.cursoemvideo.com/wp-content/uploads/2018/08/7180-90923.jpeg" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text">Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional. No entanto, esse conteúdo é um pouco maior.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" rota="https://www.cursoemvideo.com/wp-content/uploads/2018/08/7180-90923.jpeg">Ver</button>
                      
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="https://www.cursoemvideo.com/wp-content/uploads/2018/07/2426-90923.jpeg" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text">Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional. No entanto, esse conteúdo é um pouco maior.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" rota="https://www.cursoemvideo.com/wp-content/uploads/2018/07/2426-90923.jpeg">Ver</button>
                      
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="https://media.licdn.com/dms/image/C4D1FAQF7eDN8eIyM8w/feedshare-document-images_800/1?e=1563656400&v=beta&t=4pSggrv56Pgh5zR7QW--AwpAPwyyNVtuvb6QIkrrCeQ" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text">Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional. No entanto, esse conteúdo é um pouco maior.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary" rota='https://media.licdn.com/dms/image/C4D1FAQF7eDN8eIyM8w/feedshare-document-images_800/1?e=1563656400&v=beta&t=4pSggrv56Pgh5zR7QW--AwpAPwyyNVtuvb6QIkrrCeQ'>Ver</button>
                      
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16c0b824145%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16c0b824145%22%3E%3Crect%20width%3D%22348%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22116.71875%22%20y%3D%22120.3%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text">Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional. No entanto, esse conteúdo é um pouco maior.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16c0b824148%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16c0b824148%22%3E%3Crect%20width%3D%22348%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22116.71875%22%20y%3D%22120.3%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
                <div class="card-body">
                  <p class="card-text">Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional. No entanto, esse conteúdo é um pouco maior.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Ver</button>
                      
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
<div id="modal_img" class="modal">
  <div class="col-md-12">
  	
  <span class="close">&times;</span>  
  <img class="modal-content" id="imagen">
  </div>

</div>
<script type="text/javascript">
	$(".btn.btn-sm.btn-outline-secondary").click(function(){
		console.log("oi");
		$("#imagen").attr("src",$(this).attr("rota"));
		$("#modal_img").modal("show");
	});
	$(".modal").click(function(){
		$("#modal_img").modal("hide");
	})
</script>
</main>
<main role="main" id="formação">
	<div class="container">
    <div class="row align-items-center">
    	<h1 class="mb-3 bd-text-red col-md-12">Formação</h1>
    	
    		<div class="col-md-3">
    		<img alt="Faculdade Impacta Tecnologia" src="https://media.licdn.com/dms/image/C560BAQFRtlaixUvoVQ/company-logo_400_400/0?e=1571875200&amp;v=beta&amp;t=FlC28mmNlo9keRjKtXPkcToE9NEAaEoMwgfij8S7VXw" width="50px">
    		</div>
    		<div class="col-md-9">
    			<h5 class="title">Faculdade Impacta</h5>
    			<p>Analise e Desenvolvimento de Sistema</p>

    		</div>
    	</div>
</div>
</main>
<main role="main" id="Experiencia">
	<div class="container">
    <div class="row align-items-center">
    	<h1 class="mb-3 bd-text-red col-md-12">Experiencia</h1>
   <div class="col-md-3">
    		<img alt="Faculdade Impacta Tecnologia" src="https://media.licdn.com/dms/image/C4D0BAQHD1pN9Kne0gg/company-logo_400_400/0?e=1571875200&amp;v=beta&amp;t=7PTAj46VfCJ6F65s3LJKavb4g5sM3zf1NZPgXQ8zbWU" width="50px">
    		</div>
    		<div class="col-md-9">
    			<h5 class="title">Faculdade Impacta</h5>
    			<p>Analise e Desenvolvimento de Sistema</p>

    		</div>
    </div>
</div>
</main>



 <script type="text/javascript">
    	const elemento = new Vue({
    		el:".skills",
    		data:{
    			habilidades:[
{nome:"Python", porcentagen:95},
{nome:"Flask", porcentagen:70},
{nome:"Php", porcentagen:90},
{nome:"Java", porcentagen:60},
{nome:"Jquery", porcentagen:80},
{nome:"BootStrap", porcentagen:85},
{nome:"Laravel", porcentagen:75},
{nome:"Django", porcentagen:75},
{nome:"Data Science", porcentagen:60},
{nome:"Mysql", porcentagen:80},
{nome:"Transac Slq", porcentagen:85},
{nome:"Programação em T-Sql", porcentagen:70},
{nome:"NodeJs", porcentagen:50},
{nome:"MongoDB", porcentagen:40},
{nome:"VueJS", porcentagen:60},
{nome:"Ruby", porcentagen:65},
{nome:"Ruby on Rails", porcentagen:55},
{nome:"Bot no Menssager", porcentagen:50},
{nome:"Disign Patterns", porcentagen: 75},
{nome:"AJAX", porcentagen:80},
{nome:"API", porcentagen:70},
{nome:"Java Script", porcentagen: 75},
{nome:"POO", porcentagen:85},
{nome:"C#", porcentagen:70},
{nome:"ASP.NET", porcentagen:70},
{nome:"Modelagem de Dados", porcentagen:75},
{nome:"UML", porcentagen:65},
{nome:"Heroku", porcentagen:65},
    			],
    			cor: '#565656'
    		}
    	})
    </script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>