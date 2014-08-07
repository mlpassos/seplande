  <div class='row'>
  <div class = 'container'> 
  <!--left-->
  <div class="panel panel-primary">
    <div class="panel-heading">
    <h3 class="panel-title">Utilizando API SEPLANDE</h3>
  </div>
    <div class="panel-body">
  <div class="col-sm-3">
        <h2></h2>

      <div class="panel panel-primary">
          <div class="panel-heading">Exemplo Json</div>
          <div class="panel-body">
            O exemplo ao lado mostra uma requisição a api da Seplande que retorna em JSON Domicílios Particulares com Televisões
            
        </div>
        </div>
  </div><!--/left-->
  
  <!--center-->
  <div class="col-sm-9">
    <div class="row">
      <div class="col-xs-12">
        <h2>Domicílios Particulares com Televisões</h2>        
        
        <canvas id="canvas" height="400" width="600"></canvas>
        
<!--         <ul class="list-inline"><li><a href="#">2 Days Ago</a></li><li><a href="#"><i class="glyphicon glyphicon-comment"></i> 2 Comments</a></li><li><a href="#"><i class="glyphicon glyphicon-share"></i> 14 Shares</a></li></ul> -->
      </div>
    </div>
    
  </div><!--/center-->

</div>
</div>
  </div><!--/center-->
    </div><!--/center-->
<?php echo $this->Html->script('domocilios.js');?>