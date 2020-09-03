
<div class="ui grid" style="margin: 2px 0">
    <div class="row">
        <div class="three wide column"></div>
        <div class="two wide column">
            <div class="ui tiny statistics">
                <a href='/admin/comp/schools'>
                    <div class="statistic">
                        <div class="value" id="schools">0</div>
                        <div class="label">Schools</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="two wide column">
            <div class="ui tiny statistics">
                <a href='/admin/comp/teams'>
                    <div class="statistic">
                        <div class="value" id="teams">0</div>
                        <div class="label">Teams</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="two wide column">
            <div class="ui tiny statistics">
                <a href='/admin/comp/teams?division=blue'>
                    <div class="blue statistic">
                        <div class="value" id="blue_teams">0</div>
                        <div class="label">Teams</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="two wide column">
            <div class="ui tiny statistics">
                <a href='/admin/comp/teams?division=gold'>
                    <div class="yellow statistic">
                        <div class="value" id="gold_teams">0</div>
                        <div class="label">Teams</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="two wide column">
            <div class="ui tiny statistics">
                <a href='/admin/comp/teams?division=eagle'>
                    <div class="teal statistic">
                        <div class="value" id="eagle_teams">0</div>
                        <div class="label">Teams</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="three wide column"></div>
        <div class="two wide column">
            <div class="ui tiny statistics">
                <a>
                    <div class="statistic">
                        <div class="value" id="coaches">0</div>
                        <div class="label">Coaches</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="two wide column">
            <div class="ui tiny statistics">
                <a>
                    <div class="statistic">
                        <div class="value" id="students">0</div>
                        <div class="label">Students</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="two wide column">
            <div class="ui tiny statistics">
                <a>
                    <div class="blue statistic">
                        <div class="value" id="blue_students">0</div>
                        <div class="label">Students</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="two wide column">
            <div class="ui tiny statistics">
                <a>
                    <div class="yellow statistic">
                        <div class="value" id="gold_students">0</div>
                        <div class="label">Students</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="two wide column">
            <div class="ui tiny statistics">
                <a>
                    <div class="teal statistic">
                        <div class="value" id="eagle_students">0</div>
                        <div class="label">Students</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>


<script>
    function fillStatistics(data) {
        var nstudents = {
            'total': 0,
            'blue': 0,
            'gold': 0,
            'eagle': 0
        }
        var teams = {
            'total': 0,
            'blue': 0,
            'gold': 0,
            'eagle': 0
        }
        var coaches = 0

        for (const school of data) {
            coaches += school.small + school.medium + school.large + school.xlarge + school.xxlarge
            for (const team of school.teams) {
                const total = team.small + team.medium + team.large + team.xlarge + team.xxlarge

                nstudents[team.division] += total
                nstudents['total'] += total

                teams['total']++
                teams[team.division]++
            }
        }

        document.querySelector('#schools').innerText = data.length
        document.querySelector('#coaches').innerText = coaches;
        
        document.querySelector('#students').innerText = nstudents['total'];
        document.querySelector('#blue_students').innerText = nstudents['blue'];
        document.querySelector('#gold_students').innerText = nstudents['gold'];
        document.querySelector('#eagle_students').innerText = nstudents['eagle'];
        
        document.querySelector('#teams').innerText = teams['total'];
        document.querySelector('#blue_teams').innerText = teams['blue'];
        document.querySelector('#gold_teams').innerText = teams['gold'];
        document.querySelector('#eagle_teams').innerText = teams['eagle'];
    }

    document.addEventListener('DOMContentLoaded', () => {
        fetch('/admin/comp/api/schools')
            .then(response => response.json())
            .then(data => fillStatistics(data))
    })
</script>

<style>
    .two.wide.column .ui.statistics a {
        margin: 0 auto;
    }
</style>