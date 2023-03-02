<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/notes.php' ?>
<?php startblock('unit') ?>
Unit 1 Notes
<?php endblock()?>
<?php startblock('title') ?>
Analyzing Categorical Data
<?php endblock()?>
<?php startblock('notes') ?>
      <li>A categorical variable's values are the groups in which they fit</li>
      <li>Distribution lists give values and counts
        <ul> 
          <li><span class = "bold">Frequency tables</span> show counts of individuals in each category</li>
          <li><span class = "bold">Relative frequency tables</span> show percents</li>
        </ul>
      </li>
      <li>A <span class = "bold">pie chart</span> shows categories in relation to the whole; it displays percents, similar to the relative frequency tables
        <ul>
          <li><img class = "image" src = "../imgs/pie-chart.png"></li>
        </ul>
      </li>
      <li>A <span class = "bold">bar graph</span> is easier to read and make
        <ul>
          <li><img class = "image" src = "../imgs/bar-graph.png"></li>
          <li>It is more flexible, handling any set of quantities</li>
          <li>However, there is a danger of the graph being misleading. Make sure scales are appropriate and the widths of the bars are even</li>
        </ul>
      </li>
      <li>To display two categorical variables at once, a <span class = "bold">two-way table</span> is often used
        <ul>
          <li><img class = "image" src = "../imgs/two-way-table.png"></li>
          <li>Its <span class = "bold">marginal distributions</span> show the distribution of one of the variables. This can be seen on the edges of the table
            <ul>
              <li>In this example, it is highlighted yellow. You can find the percent of people that voted football, for example</li>
            </ul>
          </li>
          <li>Its <span class = "bold">conditional distributions</span> describe the distributions of one variable based on the value of another
            <ul>
              <li>Being able to compare conditional distributions is essential to statistics</li>
              <li>This is circled red. It represents the distribution of sports for only MALES</li>
            </ul>
          </li>
        </ul>
      </li>
      <li>
        An <strong>association</strong> between two categorical variables is present if the value of one helps predict another
        <ul>
          <li>When two variables have no association, they are <strong>independent</strong>
        </ul>
      </li>
<?php endblock()?>