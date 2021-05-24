{{$slot}}
<!--
start status update***
-->
    @if (session('status'))
    <div id="status_wrapper" class="bg-green-400 text-white text-center fixed bottom-0 left-0 w-full py-4">
        <!-- shows message if game was successful updating to database -->
        {{ session('status') }} &nbsp; <i id="status" class="fa fa-times-circle cursor-pointer" aria-hidden="true"></i>
    </div>
    @endif
<!--
end status update***
-->

<script>
    //allows user to close out status update message above
    let status = document.querySelector('#status');
    let status_wrapper = document.querySelector('#status_wrapper');
    status.addEventListener('click',()=>{
        status_wrapper.style.display = 'none';
    });
</script>