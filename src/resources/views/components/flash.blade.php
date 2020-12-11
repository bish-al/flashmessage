@if($flashMessage != null && $flashColour != null)
	<div>
        <p class="mx-28 flex p-2 justify-center {{$flashColour}}"
            id="flashElement">
            {{$flashMessage}}
        </p>
	</div>
@endif
		
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script type="text/javascript">
    $(document).ready(function()
    {
        // run these functions
        fadeOutFlashData();


        // available functions
        function fadeOutFlashData(){
           $("#flashElement")
                    .delay(3000)
                    .fadeOut(2000);
        }
        
    });
    
</script>
