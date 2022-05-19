<style>
    .mb-modal-container {
        background-color: rgba(0, 0, 0, 0.5);
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
    }

    .mb-modal-content {
        margin: 0 auto;
        margin-top: 250px;
        background-color: white;
        width: 50%;
        padding: 10px;
        border-radius: 5px;
    }

    .mb-modal-header {
        padding-bottom: 5px;
        border-bottom: solid 1px gray;
    }

    .mb-modal-body {
        padding-top: 10px;
        min-height: 100px;
    }

    .mb-modal-footer {
        padding-top: 5px;
        border-top: solid 1px gray;
    }

</style>
<button>Click Me!</button>
<div class="mb-modal-container" id="messagebox">
    <div class="mb-modal-content">
        <div class="mb-modal-header">
            Messagbox Header
        </div>
        <div class="mb-modal-body">
            Messagebox Body
        </div>
        <div class="mb-modal-footer">
            <button type="button" id="ok">OK</button>
        </div>
    </div>
</div>

<script>
    ok = document.getElementById("ok");
    ok.onclick = function() {
        document.getElementById("messagebox").style.display = "none";
    }
</script>