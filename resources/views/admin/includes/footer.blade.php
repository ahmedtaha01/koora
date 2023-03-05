    <script src="{{ asset('assets/admin/js/jquery-3.2.1.min.js') }}"></script>
		
    <!-- Bootstrap Core JS -->
    <script src="{{ asset('assets/admin/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>
    
    <!-- Slimscroll JS -->
    <script src="{{ asset('assets/admin/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    
    <script src="{{ asset('assets/admin/plugins/raphael/raphael.min.js') }}"></script>    
    <script src="{{ asset('assets/admin/plugins/morris/morris.min.js') }}"></script>  
    <script src="{{ asset('assets/admin/js/chart.morris.js') }}"></script>
    
    <!-- Custom JS -->
    <script  src="{{ asset('assets/admin/js/script.js') }}"></script>

    <script>
        // for updation the status of a reservation
        function updateStatus(id){
                $.ajax({
                url: 'http://127.0.0.1:8000/admin/reservationUpdateService/'+id,
                method: 'GET',
                dataType: 'JSON',
                success:function(response)
                {
                    console.log('success');
                },
                error: function(response) {
                    console.log('failed');
                }
            });
        }
        
        function deleteReview(id){
            var element = document.getElementById('review_id');
            element.value = id;
        }
        function deleteReview2(){
            id = document.getElementById('review_id').value;
            $.ajax({
                url: 'http://127.0.0.1:8000/admin/reviews/'+id,
                method: 'Delete',
                data:{
                    "_token": "{{ csrf_token() }}",
                },
                accept:'application/json',
                dataType: 'JSON',
                success:function(response)
                {
                    console.log('success');
                },
                error: function(response) {
                    console.log('failed');
                }
            });
            window.location.reload();
        }
        function sendTransactionId(id){
            var element = document.getElementById('transaction_id');
            element.value = id;
        }
        function deleteTransaction(){
            id = document.getElementById('transaction_id').value;
            $.ajax({
                url: 'http://127.0.0.1:8000/admin/reservations/'+id,
                method: 'Delete',
                data:{
                    "_token": "{{ csrf_token() }}",
                },
                accept:'application/json',
                dataType: 'JSON',
                success:function(response)
                {
                    console.log('success');
                },
                error: function(response) {
                    console.log('failed');
                }
            });
            window.location.reload();
        }

        function sendProfileData(){
            document.getElementById('user_name_modal').value = document.getElementById('user_name').innerText;
            document.getElementById('date_of_birth_modal').value = document.getElementById('date_of_birth').innerText;
            document.getElementById('email_modal').value = document.getElementById('email').innerText;
            document.getElementById('phone_modal').value = document.getElementById('phone').innerText;
            document.getElementById('code_modal').value = document.getElementById('code').innerText;
        }
    </script>