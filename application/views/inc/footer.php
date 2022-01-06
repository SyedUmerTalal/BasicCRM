
	</div>

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>        
        <!-- fullCalendar -->
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.3.1/main.min.js"></script>
        <!-- Charts -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>



<!-- <script src="script.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

<script type="text/javascript">

	$('.datedropbutton').click(function(){
	  $('.addtoit1').toggleClass('dropdownactive');
	});

	$('.profiledropbutton').click(function(){
	  $('.addtoit2').toggleClass('dropdownactive');
	});

</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<?php  if($this->session->flashdata('msg') == 1){  ?>

<script>
    
    toastr.success('<?php echo $this->session->flashdata('alert_data'); ?>')</script>
<?php }elseif($this->session->flashdata('msg') == 2){ ?>
<script> toastr.error('<?php echo $this->session->flashdata('alert_data'); ?>')</script>
<?php } ?>

<script>
	var nombrePage = $(".content").length;

showPage = function(pagination) {
  if (pagination < 0 || pagination >= nombrePage) return;

	  $(".content").hide().eq(pagination).show();
	  $("#pagin li").removeClass("activepage").eq(pagination).addClass("activepage");
	}

	// Go to Left
	$(".prev").click(function() {
	  showPage($("#pagin ul .activepage").index() - 1);
	});

	// Go to Right
	$(".next").click(function() {
	  showPage($("#pagin ul .activepage").index() + 1);
	});

	$("#pagin ul a").click(function(e) {
	  e.preventDefault();
	  showPage($(this).parent().index());
	});

	showPage(0)
	
                $(function(){
                   $('.selectStatus').change(function() {
                       let selectedVal = $(this).val();
                       let id = $(this).attr("id");

                            $.ajax({
                               url: 'ajax-requestPost',
                               type: 'POST',
                               data: {id: id, selectedVal: selectedVal},
                               success: function(data) {
                                   if(data==1){
                                       toastr.success('Updated Successfully');
                                       //getMessage('Success','top-right','Updated Successfully');
                                   } else {
                                        toastr.error('Something went wrong');
                                       //getMessage('Error','top-right','Something went wrong');
                                   }
                                   
                                   //alert(data);
                                //   if(data===1){
                                //       alert('ok');
                                //   } else {
                                //         alert('No');                                       
                                //   }
                               }
                            });
                   })
                });
                

	
function getMessage(s,p,t) {
        return $.toast({
            heading: s,
            position:p
,
            text: t,
            showHideTransition: 'plain',
            icon: s.toLowerCase()
        });
    }	
</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script>
    
$(document).ready(function () {
    
      $('#table_id').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });

});
</script>
</body>

</html>