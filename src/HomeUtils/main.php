<ul>
    <li>utils</li>
    <ul>
        <li>該工具只用於 React Component</li>
        <li>"不要" 在 React Component 以外的地方使用</li>
    </ul>
</ul>

<script>
    "use strict";

    $(function() {
        $(".viewCodes p").each(function(){
            var pre = $(this).next('pre');
            var exec = 'return ' + pre.text();
            var run = new Function(exec);
            pre.next('span').text( run() );
        });
    });

</script>

<hr />
<div class="viewCodes">

    <p>
        <pre>utils.getUniqueId()</pre>
        <span></span>
    </p>

    <p>
        <pre>utils.getUniqueId('hello-')</pre>
        <span></span>
    </p>

</div>

<hr />

<pre>
var obj = {
    name: 'john',
    birth: '2000-01-01',
    age: 12
}
utils.each(obj, function(key, value){ 
    console.log( key, value );
})
</pre>

<pre>
var list = [
    'john',
    '2000-01-01',
    12
];
utils.each(list, function(key, value){ 
    console.log( key, value );
})
</pre>


