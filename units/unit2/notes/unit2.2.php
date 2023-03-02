<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/notes.php' ?>
<?php startblock('unit') ?>
Unit 2 Notes
<?php endblock()?>
<?php startblock('title') ?>
      Standardizing and Shifting
<?php endblock()?>
<?php startblock('notes') ?>
        <li><strong>Standardizing&nbsp;</strong>a value is key to statistics</li>
        <li style="list-style-type: none;">
            <ul>
                <li>It involves dividing the difference between the value and the mean by the standard deviation</li>
                <li>More officially, it is represented as: $$z = \frac{x_i-\overline{x}}{s_x}\ \ or\ \ z=\frac{x_i - \mu}{\sigma}$$</li>
                <li>It is often called a datum's&nbsp;<strong>z-score</strong></li>
                <li>Represents how many standard deviations a point is away from the mean</li>
                <li>A dataset can be converted to their z-scores for analysis, here are its effects:
                    <ul>
                        <li><strong>Center:</strong> the mean of a z-score distribution should be 0<br />
                            $$z = \frac{\overline{x} - \overline{x}}{s_x} = 0$$
                        </li>
                        <li><strong>Shape:&nbsp;</strong>remains unchanged</li>
                        <li><strong>Spread:</strong> since you are dividing by the standard deviation to find a z-score, the new standard deviation for a z-score distribution should be 1 $$z = \frac{s_x}{s_x} = 1$$
                            <ul>
                                <li>This represents the point that is one standard deviation away from the mean. because you divide by the standard deviation, the point will end up being 1, which is 1 away from the mean, 0
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>A distribution of quantitative variables can be&nbsp;<strong>shifted&nbsp;</strong>in many ways
            <ul>
                <li><strong>Adding or subtracting</strong> simply shifts it
                    <ul>
                        <li>The measures of center are changed, but measures of variability (i.e. standard deviation, variance, range, IQR) are not</li>
                    </ul>
                </li>
                <li><strong>Multiplying or dividing&nbsp;</strong>stretches or compresses it
                    <ul>
                        <li>The measurements of center, or data points themselves are all changed by a measure of magnitude</li>
                        <li>Things like standard deviation, range, and IQR are all scaled by the factor
                            <ul>
                                <li>However, variance is doubly scaled by that factor, since it represents a sum of&nbsp;<strong>squared</strong> deviations</li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>Neither of these transformations change the points' relative locations to one another</li>
            </ul>
        </li>
<?php endblock()?>