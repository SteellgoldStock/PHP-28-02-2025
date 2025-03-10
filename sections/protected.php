<?php if (isset($_SESSION["username"])): ?>
  <div>
    <h1>Salut <?php echo $_SESSION["username"] ?></h1>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, ipsum consectetur voluptate, amet incidunt earum obcaecati quam quae minus hic harum. Eligendi repellendus numquam laboriosam adipisci unde tenetur possimus, recusandae explicabo quaerat, velit, eius dolore laborum! Repudiandae dolor ratione voluptate laudantium nisi cupiditate quas nulla laborum beatae, explicabo molestiae cum culpa repellendus dolores inventore placeat consectetur totam atque officia, accusamus alias deleniti. Nostrum sint quis maiores quos repellat beatae numquam asperiores corrupti. Assumenda molestias sit aliquid perferendis earum, corporis expedita, perspiciatis voluptatem rerum ex omnis minus non obcaecati. Reprehenderit accusantium numquam non ullam aspernatur corporis, doloremque dolor vero sed iure ratione, veniam praesentium porro, incidunt nihil eveniet. Neque reprehenderit debitis ipsa provident nulla deserunt quo veniam aut obcaecati. Sapiente nobis aspernatur quae, quos hic repudiandae voluptatem perferendis nostrum. Nihil, natus cumque id, placeat odio optio dolores perferendis nostrum maxime architecto quam iusto? Maxime veritatis repellendus amet eius quos aliquam totam eligendi, accusamus at tenetur beatae corrupti minima earum sit inventore assumenda debitis ipsa sapiente doloremque ad labore architecto vitae excepturi. Labore inventore, facere voluptate earum natus perferendis enim dolorum! Facere, blanditiis rem quia atque modi hic cumque repellat illum assumenda quam! Totam similique magnam voluptatem accusantium distinctio nisi provident consequuntur, doloribus a eaque adipisci, exercitationem blanditiis fugit officiis quisquam voluptates sunt commodi ex quaerat! Quia autem facere ad omnis? Magni rem maxime esse illo odio dolor rerum voluptatibus at excepturi officiis enim odit cum optio laudantium, eligendi quis asperiores. Facere quasi quos at voluptas ipsum ad ullam molestias quam, amet eius officiis itaque, tempore consequatur. Corporis quos ipsam placeat eligendi ratione! Modi nam sint quisquam, magnam repudiandae commodi atque a possimus ipsam quaerat alias nulla aliquam eos velit neque dolores placeat labore quis. Dolore quo voluptatibus reiciendis modi beatae? Quas ipsa deserunt cupiditate quos delectus quibusdam facere hic tenetur iusto.
    </p>
  </div>
<?php else: ?>
  <div>
    <p>
      Tu n'es pas connecté ! Tu ne peut pas voir cette page.
    </p>
  </div>
<?php endif; ?>