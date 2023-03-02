<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/notes.php' ?>
<?php startblock('unit') ?>
Unit 1 Notes
<?php endblock()?>
<?php startblock('title') ?>
Introduction to Statistics
<?php endblock()?>

<?php startblock('notes') ?>
      <li>
        An <span class = "bold">individual</span> is something or someone that the data describes
      </li>
      <li>
        A <span class="bold">variable</span> is a characteristic of an individual. Variables can be either quantitative or categorical
        <ul>
          <li>A <span class = "bold">quantitative</span> variable is one that is almost always described with numbers
            <ul>
              <li>It makes sense to take an average of the values in a quantitative data set</li>
              <li>Ex: GPA, Age, Height</li>
              <li>These can be grouped into categorical values (i.e. age ranges)</li>
            </ul>
          </li>
          <li>A <span class = "bold">categorical</span> variable places the individual into 'groups'
            <ul>
              <li>Ex: Gender, Race, Zip-Code</li>
              <li>Note: While the variable may seem numerical, such as grade level, it can still be categorical, because it does not make sense to take an average Zip-Code.</li>
            </ul>
          </li>
          <li>Further information on variables can be found <a href = "https://youtu.be/6DzMnA2L_4E" target = "_blank"> here</a></li>
        </ul>
      </li>
      <li>A <span class = "bold">distribution</span> is the pattern that a variable follows
        <ul>
          <li>Includes an analysis of closeness, spread, outliers, modality, etc.
        </ul>
      </li>
      <li>An <span class = "bold">inference</span> is a conclusion made based on data. It does not have to be correct, just statistically sound</li>
<?php endblock()?>