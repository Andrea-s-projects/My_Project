<style>
    div.card {
       
        position: relative;

        #removeAnnouncement {
            position: absolute;
            top: 10px;
            right: 10px;
            color: #FAF9F6;
            padding: 5px 10px;
            border-radius: 50px;
            background-color: #dc3545;
            transition: .5s;
            border: none;

            &:hover {
                background-color: #761c25;
            }
        }
        

        .card-title {
            color: #6a50af !important;
        }
    }
</style>

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 justify-content-lg-between  justify-content-center ">
 
    <x-card_annunci :announcements="$announcements" />

</div>