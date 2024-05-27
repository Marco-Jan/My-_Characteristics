<section>
    <h2>Bilder bearbieten oder löschen</h2>
    <?php if (isset($images)) : ?>
        <table>
            <thead>
                <tr>
                    <th>Bild</th>
                    <th>Alt-Text</th>
                    <th>Aktionen</th>
                </tr>
            </thead>
            <?php foreach ($images as $image) : ?>
                <tr>
                    <td><img src="../uploads/img/<?= e($image->id) ?>"></td>
                    <td><?= e($image->alt) ?></td>
                    <td>
                        <a href="#action=edit&id=<?= e($ijmage->id) ?>">bearbieten</a>
                        <a href="#action=delete&id=<?= e($ijmage->id) ?>">löschen</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else : ?>
        <p>Es wurden bisher noch keinen Bilder erfasst</p>
    <?php endif; ?>
</section>