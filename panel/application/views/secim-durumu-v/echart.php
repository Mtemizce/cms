<div class="col-md-6">
    <div class="widget">
        <header class="widget-header">
            <h4 class="widget-title">Mahalleye Göre Seçim</h4>
        </header><!-- .widget-header -->
        <hr class="widget-separator">
        <div class="widget-body">
            <div>
                <form>
                    <select id="secim">
                        <option id="01">Seçim 1</option>
                        <option id="02">Seçim 2</option>
                    </select>
                </form>
            </div>
            <script type="text/javascript">
               
            var

            </script>
            <div data-plugin="plot" data-options="
            [
                { label: 'MHP', data: 51.74, color: '#436eee' },
                { label: 'AKP', data: 15.74, color: '#ffa000' },
                { label: 'CHP', data: 16.67, color: '#c60000' },
            ],            
            { series: { pie: { show: true }},
            legend: { show: false },
            grid: { hoverable: true },
            tooltip: {
            show: true,
            content: '%s %p.0%',
            defaultTheme: false
            }
            }" style="width: 300px;height: 400px;">
            </div>
        </div><!-- .widget-body -->
    </div><!-- .widget -->
</div><!-- END column -->
<div class="col-md-6">
    <div class="widget">
        <header class="widget-header">
            <h4 class="widget-title">Harita Seçim Durumu</h4>
        </header><!-- .widget-header -->
        <hr class="widget-separator">
        <div class="widget-body">
            <div data-plugin="vectorMap" data-options="
            {
                map: 'africa_mill',
                backgroundColor: '#ffffff',
                regionsSelectable: true,
                regionStyle: {
                initial: { fill: '#3498db', 'fill-opacity': 1, stroke: 'none', 'stroke-width': 0, 'stroke-opacity': 1 },
                hover: { 'fill-opacity': 0.8, cursor: 'pointer' },
                selected: { fill: '#2980b9' },
                }
                }" style="width: 300px; height: 400px;">
            </div>
        </div><!-- .widget-body -->
    </div><!-- .widget -->
</div><!-- END column -->