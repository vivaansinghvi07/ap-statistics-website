<?php include $_SERVER['DOCUMENT_ROOT'].'/templates/notes.php' ?>
<?php startblock('unit') ?>Unit 4 Notes
<?php endblock() ?>
<?php startblock('title') ?>
      Introduction to Probability
<?php endblock() ?>
<?php startblock('notes') ?>
        <li>The&nbsp;<strong>law of large numbers</strong> states that as one observes more and more repetitions of a chance process, the proportion of times that a specific outcome occurs approaches a certain value
            <ul>
                <li>Probability is predictable in the long run and not in the short run</li>
                <li>Flipping a coin 10 times versus flipping it 1000 times
                    <ul>
                        <li>When you flip it 1000 times, you can be more sure that your proportion of heads will be around 50 percent</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>The&nbsp;<strong>probability&nbsp;</strong>of any outcome in a chance process is a number between 0 and 1 that represents the proportion time the outcome occurs after many repetitions of the process</li>
        <li>There are some misconceptions regarding probability:
            <ul>
                <li><strong>Short-Run Regularity:&nbsp;</strong>Probability allows for short-run predictions - FALSE
                    <ul>
                        <li>Just because a coin has flipped 2 times in a row, it does not guarantee a tails on the next flip</li>
                    </ul>
                </li>
                <li><strong>Law of Averages</strong><strong>:</strong> Past outcomes affect the future outcomes - FALSE
                    <ul>
                        <li>Nothing that happens in the past affects how the chance process will behave in the future unless the outcome directly affects the process itself (i.e. sampling without replacement)</li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>A&nbsp;<strong>simulation&nbsp;</strong>can model chance events. To conduct a simulation, follow this process:
            <ul>
                <li><strong>State:</strong> State the question of interest regarding the chance process</li>
                <li><strong>Plan: </strong>Describe how to model that process using a device or another method. Describe the repetitions</li>
                <li><strong>Do:&nbsp;</strong>Run the repetitions</li>
                <li><strong>Conclude:&nbsp;</strong>Answer the question of interest</li>
            </ul>
        </li>
<?php endblock() ?>