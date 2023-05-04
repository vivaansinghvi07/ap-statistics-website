<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/notes.php' ?>
<?php startblock('unit') ?>
Unit 1 Notes
<?php endblock()?>
<?php startblock('title') ?>
Analyzing Quantitative Data
<?php endblock()?>

<?php startblock('notes') ?>
        <li>The&nbsp;<strong>mean&nbsp;</strong>of a dataset is the sum of the observations divided by the count
            <ul>
                <li>It is represented as: <span>$$\overline{x}=\frac{\sum_{}^{}x_i}{n}$$</span></li>
                <li>\(\overline{x}\) represents the mean of a sample, while \(\mu\) represents the mean of a population</li>
                <li>The mean is not&nbsp;<strong>resistant</strong>, meaning it is sensitive to outliers
                    <ul>
                        <li>An outlier or skewness would greatly affect the mean</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>The&nbsp;<strong>median&nbsp;</strong>is simply the exact center of a dataset
            <ul>
                <li>To find this, order the values from least to greatest, and just go to the halfway point</li>
                <li>Easier to find in small datasets</li>
                <li>Unlike the mean, it is&nbsp;<strong>resistant&nbsp;</strong>to deviations
                    <ul>
                        <li>Therefore, it is a useful measure when there is a skew or outlier present</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><strong>Range&nbsp;</strong>is a measure of variability
            <ul>
                <li>It is the greatest value minus the lowest value</li>
                <li>This is&nbsp;<strong>not resistant</strong></li>
            </ul>
        </li>
        <li>The <strong>interquartile range (IQR)&nbsp;</strong>is more resistant&nbsp;
            <ul>
                <li>The range of the middle 50% of the data</li>
                <li>Found by doing Q<sub>3</sub> - Q<sub>1</sub>
                    <ul>
                        <li>Q<sub>1</sub> is the median of the "left half" of data compared to the median (not including it); vice versa for Q<sub>3</sub></li>
                    </ul>
                </li>
                <li>The&nbsp;<strong>1.5 x IQR&nbsp;</strong><strong>rule&nbsp;</strong>is a good way of detecting outliers
                    <ul>
                        <li>If a data point lies 1.5 x IQR beyond either the Q<sub>1&nbsp;</sub>or Q<sub>3</sub> value, it is an&nbsp;<strong>outlier</strong></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>The&nbsp;<strong>five-number summary</strong> of a dataset is the:
            <ul>
                <li>min, Q<sub>1</sub>, median, Q<sub>3</sub>, max</li>
            </ul>
        </li>
        <li>This is displayed by a&nbsp;<strong>box-plot</strong>
            <ul>
                <li><img class = "image" src = "../imgs/boxplot.png"></li>
                <li>Less detail than any other method</li>
                <li>Best used for side-by-side comparisons of data-sets
                    <ul>
                        <li><img class = "image" src = "../imgs/box-side.png"></li>
                        <li>You can compare things like shape, center, extremes, and spread</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><strong>Standard deviation&nbsp;</strong>is used more commonly than the five-number summary
            <ul>
                <li>To find this, first start with the mean, and find the deviation between a number and the mean</li>
                <li>Square it and sum it all together</li>
                <li>If looking at a sample, divide by \(n - 1\). If it is a population, divide by \(n\). (\(n\) is the number of values)
                    <ul>
                        <li>The sample standard deviation is represented as \(s_x\), and the population standard deviation is \(\sigma\)</li>
                    </ul>
                </li>
                <li>This value is the <strong>variance</strong>. To find the standard deviation, simply square root this value</li>
                <li>More formally, standard deviation is the following: <span>$$s_x = \sqrt{\frac{\sum_{}^{}(x_i-\overline{x})^2}{n-1}}$$</span></li>
                <li>Remember: if you're analyzing the population, divide by \(n\), not \(n-1\)</li>
                <li>This value is always greater than zero, and have the same unit of measurement as the data</li>
                <li>However, it is <strong>not resistant</strong> to deviations</li>
            </ul>
        </li>
        <li>Takeaways:
            <ul>
                <li>Use <strong>median</strong> and <strong>IQR</strong> when there are clear outliers or skewness</li>
                <li>Almost always make a graph when analyzing</li>
            </ul>
        </li>
<?php endblock()?>
