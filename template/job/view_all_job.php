<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=xxx";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<?php //var_dump($All_category_dua_vao_menu) ?>
<div class="col col-md-2">
    <div id="accordian">
        <ul>
            <li>
                <h3><span class="icon-dashboard"></span>Lĩnh vực</h3>
                <ul>
                    <?php foreach ($All_category_dua_vao_menu as $category) :?>
                        <li><a href="?page=job&category=<?php echo $category["id"] ?>"><?php echo $category["name"] ?></a></li>
                    <?php endforeach; ?>


                </ul>
            </li>
            <!-- we will keep this LI open by default -->
            <li class="active">
                <h3><span class="icon-tasks"></span>Tasks</h3>
                <ul>
                    <li><a href="#">Today's tasks</a></li>
                    <li><a href="#">Urgent</a></li>
                    <li><a href="#">Overdues</a></li>
                    <li><a href="#">Recurring</a></li>
                    <li><a href="#">Settings</a></li>
                </ul>
            </li>
            <li>
                <h3><span class="icon-calendar"></span>Calendar</h3>
                <ul>
                    <li><a href="#">Current Month</a></li>
                    <li><a href="#">Current Week</a></li>
                    <li><a href="#">Previous Month</a></li>
                    <li><a href="#">Previous Week</a></li>
                    <li><a href="#">Next Month</a></li>
                    <li><a href="#">Next Week</a></li>
                    <li><a href="#">Team Calendar</a></li>
                    <li><a href="#">Private Calendar</a></li>
                    <li><a href="#">Settings</a></li>
                </ul>
            </li>
            <li>
                <h3><span class="icon-heart"></span>Favourites</h3>
                <ul>
                    <li><a href="#">Global favs</a></li>
                    <li><a href="#">My favs</a></li>
                    <li><a href="#">Team favs</a></li>
                    <li><a href="#">Settings</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div class="col col-md-6">
    <?php foreach ($all_job as $job) {?>

    <div class="col col-md-4">
    <h2> <?php  echo $job["title"]; ?>  </h2>
    <small><?php  echo $job["description"]; ?> </small>
    <div class="col col-md-12">

    <a href="#"><img src="admin/public/img/<?php echo $job["img"];?>" width="130" height="130" ></a>
    </div>
    </div>

    <?php } ?>

</div>
<div class="col col-md-3 col-xs-5">
<div class="fb-page" data-href="https://www.facebook.com/3Qtonghop/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
    <blockquote cite="https://www.facebook.com/3Qtonghop/" class="fb-xfbml-parse-ignore">
        <a href="https://www.facebook.com/3Qtonghop/">Cộng đồng 3Q Củ Hành</a>
    </blockquote></div>
</div>
