


    <div class="main-body" style="background-color: rgb(243, 243, 244);">
        <?php echo $this->render('/widgets/userCabineteNav') ?>
        <div>
            <div class="row p-w-xl">
                <div class="col-lg-6">
                    <a href="/app/course-page/<?php echo $courseMaterial->course_id?>">Назад</a><br/>
                    <div class="ibox">
                        <div class="ibox-content">
                            <h5><?php echo $courseMaterial->name ?></h5>
                        </div>
                        <div class="ibox-content">
                            <?php echo $courseMaterial->description ?>
                            <div class="d-flex justify-content-between w-50">
                                <?php if(!empty($links)): ?>
                                    <?php foreach ($links as $link): ?>
                                        <p>
                                            <a href="<?php echo $link['link'] ?>" target="_blank" >Ссылка</a>
                                        </p
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="ibox-content d-flex justify-content-between flex-wrap  pt-3">
                            <?php foreach ($courseMaterialFile as $file): ?>
                                <a class="text-decoration-none" href="/app/download-file?id=<?php echo $file->id; ?>">скачать материалы</a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




