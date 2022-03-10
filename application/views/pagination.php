
        <div align="right" id="pagination_link"></div>
        <div class="table-responsive" id="country_table"></div>

<script>
    $(document).ready(function() {

        function load_country_data(page) {
            $.ajax({
                url: "<?php echo base_url(); ?>Test/pagination/" + page,
                method: "GET",
                dataType: "json",
                success: function(data) {
                    $('#country_table').html(data.country_table);
                    $('#pagination_link').html(data.pagination_link);
                }
            });
        }

        load_country_data(1);

    });
</script>


<script>
$(document).ready(function(){

 $(document).on("click", ".pagination li a", function(event){
  event.preventDefault();
  var page = $(this).data("ci-pagination-page");
  load_country_data(page);
 });

});
</script>
