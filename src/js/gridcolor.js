varienGrid.addMethods({
    colorize: function() {
        cells = $$('#' + this.containerId + this.tableSufix + ' tbody tr td');
        for (var cell = 0; cell < cells.length; cell++) {
            children = cells[cell].childElements();
            for (index = 0; index < children.length; index++) {
                if (0 < children[index].className.length) {
                    cells[cell].addClassName(children[index].className);
                    break;
                }
            }
        }
    }
});