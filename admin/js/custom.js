(function($){
  $(document).ready(function(){

    // // Desh menu active feature
    // $(document).on('click','ul#dash-menu li', function(){
    //   $('ul#dash-menu li').removeClass('active');
    //   $(this).addClass('active');
    // });

    //Add user modal
    $(document).on('click','#add_user_btn',function(){

       $('#add_user_modal').modal('show');

       return false;
    });

    // Add user form submit
    $(document).on('submit','form#add_user_form', function(event){

      event.preventDefault();

      $.ajax({

          url: 'Templates/ajax/user_add.php',
          method : "POST",
          data : new FormData(this),
          contentType : false,
          processData : false,
          success : function(data){

              $('form#add_user_form')[0].reset();
              $('#add_user_modal').modal('hide');
              $('.mess').html(data);
                allUsers();
          },

      });

    });

    // All user data fetch
    function allUsers() {

        $.ajax({

          url : 'Templates/ajax/user_all.php',
          success : function(data){

                  $('tbody#all_users_tbody').html(data);

          },

        });

    }
    allUsers();

    // Delete user account
    $(document).on('click', 'a#delete_user', function(e){
        e.preventDefault();

        let del = confirm('Are you sure ? ');
        let id = $(this).attr('user_id');

        if ( del == true ) {

            $.ajax({

              url : 'Templates/ajax/user_delete.php',
              method : "POST",
              data : { id : id },
              success : function(data){

                    $('.mess').html(data);
                    allUsers();

              },


            });

        } else {
          return false;
        }

    });























  });

})(jQuery)
