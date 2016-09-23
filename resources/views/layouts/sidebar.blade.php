

<div id="sidebar">
    <ul>
        <li><a href="#">Link1</a></li>
        <li><a href="#">Link2</a></li>
        <li><a href="#">Link3</a></li>
        <li><a href="#">Link4</a></li>
    </ul>
</div>
<div id="sidebarbtn">
    <span></span>
    <span></span>
    <span></span>
</div>

<script>
    $(document).ready(function(){
        $('#sidebarbtn').click(function () {
            $('#sidebar').toggleClass('visible');
        });
    });
</script>