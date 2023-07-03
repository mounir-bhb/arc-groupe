<template>
    
        <div class="compare">
                        
            <table>
                <tr>
                    <th>Data (type)</th>
                    <td>SKY 3000-A3-9</td>
                    <td>SKY 3000-A3-16</td>
                </tr>
                <tr>
                    <th>Slide-way head thickness</th>
                    <td>9 mm</td>
                    <td>16 mm</td>
                </tr>
                <tr>
                    <th>Type of slide-ways</th>
                    <td>70x65x9</td>
                    <td>70x65x9</td>
                </tr>
                <tr>
                    <th>Cariying capacity-min.max</th>
                    <td>1300-3000</td>
                    <td>1300-3000</td>
                </tr>
                <tr>
                    <th>Max. tripping speed</th>
                    <td>1.5m/s</td>
                    <td>1.5m/s</td>
                </tr>
                <tr>
                    <th>Slide-way surface quality</th>
                    <td>Cold-drawn/Machined</td>
                    <td>Cold-drawn/Machined</td>
                </tr>
            </table>
        </div>
</template>

<script>
    export default {
        
    }
</script>

<style lang="scss" scoped>
    table{
        tr{
            padding: 10px;
            th{
                position: relative;
                text-align: start;
                top: 0;
                div{
                    position: absolute;
                    top: 0;
                }
            }
        }
    }
    .compare{
        margin-top: 20px;
        margin-bottom: 20px;
        display: flex;
        justify-content: center;
        width: 100%;
        table{
            width: 80%;
            /* tbody{
                width: 100%;
            } */
            td, th{
                width: 30%;
                border: 1px solid;
                border-collapse: collapse;
                border-left: 0px;
                border-right: 0px;
            }
            td{
                text-align: center;
            }
            
            tr:nth-of-type(1){
                td,th{
                    border-top: 0;
                    
                }
            }
            tr:nth-last-of-type(1){
                td,th{
                    border-bottom: 0;
                }
            }
            tr:nth-of-type(odd){
                background-color: var(--main-color);
                color: white;
            }
            tr:nth-of-type(even){
                background-color: var(--back-color-alt);
            }
            tr:nth-of-type(odd):hover{
                background-color: var(--main-color-alt);
            }
            tr:nth-of-type(even):hover{
                background-color: rgb(226, 237, 250);
            }
        }
        
        .head{
            font-weight: bold;
            font-size: large;
        }
    }
    
</style>