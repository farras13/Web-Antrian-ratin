    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    	<!-- <div class="container">
    		<a class="navbar-brand" href="#">Terima Kasih</a>
    		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
    		</button>
    		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    			<div class="navbar-nav">
    				<a class="nav-item nav-link" href="#">Home <span class="sr-only">(current)</span></a>
    				<a class="nav-item nav-link" href="#">Data </a>
    				<a class="nav-item nav-link" href="#">1 </a>
    				<a class="nav-item nav-link" href="#">2 </a>
    				</li>
    				</ul>
    			</div>
				</div>
    </nav> -->

    	<div class="container-fluid">
    		<div class="bg-dark text-white text-center" style="min-height:4.3rem" ;>
    			<br>
    			<h7></h7>
    		</div>
    	</div>
    </nav>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
    	$(document).ready(function() {
			tampil_data_barang();
    		function tampil_data_barang() {
    			$.ajax({
    				type: 'GET',
    				url: '<?php echo base_url() ?>Antri/get_antriA',
    				async: true,
    				dataType: 'json',
    				success: function(data) {
    					var html = '';
    					var i;
    					for (i = 0; i < data.length; i++) {
    						html += '<tr style="text-align:center;">' +
    							'<td>' + data[i].no_antri + '</td>' +
    							'<td>' + data[i].tanggal + '</td>' +
    							'<td>' +
    							'<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="' + data[i].no_antri + '">Panggil</a>' +
    							'</td>' +
    							'</tr>';
    					}
    					$('#show-antriA').html(html);
    				}

    			});
			}
			setInterval(tampil_data_barang,1080);
    	});
    </script>

    </body>

    </html>
