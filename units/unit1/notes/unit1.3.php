<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/notes.php' ?>

<?php startblock('unit') ?>
Unit 1 Notes
<?php endblock()?>
<?php startblock('title') ?>
Analyzing Quantitative Data
<?php endblock()?>
<?php startblock('notes') ?>
        <li>You can represent quantitative data with many kinds of graphs
            <ul>
                <li>A&nbsp;<strong>stem and leaf plot</strong> is good for small datasets
                    <ul>
                        <li><img class = "image" src = "../imgs/stem-leaf.png"></li>
                        <li>To write one: write the stems in order, and leaves in rows. Separate the two features with a column, as shown above</li>
                        <li>Don't forget a key that shows how to read the graph</li>
                        <li>A plot can have&nbsp;<strong>split stems&nbsp;</strong>in which one stem is shown twice (or mode), splitting the leaves to be in either of the two (for example, leaves in the range 0-4 go in the first stem, and 5-9 go in the second
                            <ul>
                                <li><img class = "image" src = "../imgs/split-stem.png"></li>
                            </ul>
                        </li>
                        <li>A&nbsp;<strong>back to back</strong> stem plot can be used to compare two similar data sets
                            <ul>
                                <li>Use the same stem for both sets. One data set's leaves go on one side, the other's on the other side</li>
                                <li>When needed, round for better leaves and more readable data</li>
                                <li><img class = "image" src = "../imgs/back-to-back.png"></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>A&nbsp;<strong>histogram</strong> graphs numbers by grouping them into classes
                    <ul>
                        <li><img class = "image" src = "../imgs/histogram.png"></li>
                        <li>Each class/group must have the same "width" - i.e. 0-9, 10-19, 20-29
                            <ul>
                                <li>Be smart when choosing class size - it affects the shape of the graph</li>
                            </ul>
                        </li>
                        <li>Bars must be TOUCHING</li>
                        <li>Use a percents or counts in the y-axis to represent relative frequency or frequency</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>After making a graph, it is important to look for trends
            <ul>
                <li><strong>Overall patterns:</strong><br />
                    <ul>
                        <li><strong>Shape</strong> has many different aspects&nbsp;<br />
                            <ul>
                                <li>To describe shape, looking for major features that stand out on the graph</li>
                                <li><strong>Symmetry&nbsp;</strong>is when the left and right sides of the graph look the same</li>
                                <li>A graph is&nbsp;<strong>skewed</strong> when one side is longer than the other
                                    <ul>
                                        <li>A <strong>left&nbsp;</strong>skew is when the left tail is longer than the right, and vice versa</li>
                                    </ul>
                                </li>
                                <li><strong>Modality</strong> represents how many peaks the graph has. A&nbsp;<strong>unimodal&nbsp;</strong>graph has one peak, a&nbsp;<strong>bimodal</strong> graph has two, and a&nbsp;<strong>multimodal&nbsp;</strong>graph has more than two
                                    <ul>
                                        <li>When looking at modality, ignore small bumps; they don't count as peaks</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><strong>Center</strong> is simply where the data is centered around, usually described by the&nbsp;<strong>median</strong>, or sometimes&nbsp;<strong>mean</strong></li>
                        <li><strong>Spread&nbsp;</strong>is how much the data varies; the&nbsp;<strong>range</strong></li>
                    </ul>
                </li>
                <li><strong>Departures</strong> are things "outside" the general pattern
                    <ul>
                        <li>An&nbsp;<strong>outlier</strong> is value that clearly stands out from the rest of the data points<strong></strong></li>
                    </ul>
                </li>
            </ul>
        </li>
<?php endblock()?>