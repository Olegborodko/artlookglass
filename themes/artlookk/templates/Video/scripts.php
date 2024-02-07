<script>
    document.getElementById("defaultOpen").click();
    function openTab(evt, tabName) {
        var i, tabcontent, tablinks;

        tabcontent = document.getElementsByClassName("video-item");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active-video", "");
        }

        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active-video";
    }
</script>
