
    <div class="row">
        <div class="col-md-10">

            <div id="content"></div>
            <p>
                <?php outputCode(getReadme()); ?>
            </p>

        </div>
        <div class="col-md-2">

            <?php echo getInfoHtml('0.1', [
                ['Bootstrap'],
            ]); ?>

        </div>
    </div>

    <script type="text/babel">
        var Main = React.createClass({
            render() {
                return (
                    <div className="form-group">
                        <ui.InputLabel name="InputLabel" label="Label Name" require="*" maxlength="10" />
                    </div>
                );
            },
        });
        ReactDOM.render(<Main />, document.getElementById('content'));
    </script>
