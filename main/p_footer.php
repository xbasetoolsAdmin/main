            var clipboard = new Clipboard('.copyit');
            clipboard.on('success', function(e) {
                setTooltip(e.trigger, 'Copied!');
                hideTooltip(e.trigger);
                e.clearSelection();
            });
 
        });
 
 
        function setTooltip(btn, message) {
            //console.log("hide-1");
            $(btn).tooltip('hide')
                .attr('data-original-title', message)
                .tooltip('show');
            //console.log("show");
        }
 
        function hideTooltip(btn) {
            setTimeout(function() {
                $(btn).tooltip('hide'); /*console.log("hide-2");*/
            }, 1000);
        }
    </script>
</body>
 
</html>