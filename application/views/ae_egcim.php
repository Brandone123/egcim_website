<style type="text/css">
    :root {
    --bg: #fdfdfd;
    --highlight1: #3483eb;
    --highlight2: #eef4fb;
    --color: #1a1e24;
    --font-number: Montserrat, Roboto, Helvetica, Arial, sans-serif;
    --font-head: "Space Mono", Consolas, Menlo, Monaco, "Courier New", monospace;
    --font: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}

.liste {
    list-style: none;
    width: auto;
}

.iteme {
    display: block;
    clear: both;
    counter-increment: list;
    padding-bottom: 1rem;
    font-size: 1;
    line-height: 1.375;
    position: relative;
}

.iteme::before {
    font: bold 1.5rem/1 var(--font-number);
    content: counter(list);
    width: 4.5rem;
    height: 4.5rem;
    float: left;
    margin: 0 0.5rem 0.1rem 0;
    color: var(--bg);
    background: var(--highlight1) linear-gradient(to bottom right, var(--highlight1) 25%, var(--highlight2));
    text-shadow: 0 0 2px var(--highlight1);
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    shape-outside: ellipse();
    z-index: 1;
}
@media all and (max-width: 1024px)
{
    .iteme:before{
        margin: 0 1rem 0.4rem 0;
        font: bold 2.0rem/1 var(--font-number);
    }

}
.iteme:after {
    width: 2.5rem;
    height: 2.5rem;
    position: absolute;
    top: 0;
    left: 0;
    content: "";
    background: var(--highlight1);
    z-index: -1;
    border-top-left-radius: 3px;
}


.headline {
    padding: 1.3rem 0 0 0;
    margin: 0 0 1rem 0;
    font: normal 1.3rem var(--font-head);
}
</style>
  
        <div id="templatemo_content">
        
            <div class="templatemo_box">
                <div class="section-heading style-2">
                    <ol class="liste">
                        <li class="iteme">
                            <h2 class="headline" style="color: black; text-align: left;">
                                AE-EGCIM (Association des Etudiants de l'EGCIM)
                            </h2><br>
                            <p>La mission de l’AE-EGCIM consiste à défendre les intérêts des étudiants par l’élaboration de politique et de conduite de recherches, les relations avec l’administration en mettant à profit une structure axées sur les membres et en utilisant une approche locale.</p>
                            
                        </li>
                        <li class="iteme">
                            <h2 class="headline" style="color: black; text-align: left;">
                                VALEURS
                            </h2>
                            <p>L’AE doit se concentrer exclusivement sur les enjeux touchants les étudiants </p>
                        </li>
                        <li class="iteme">
                            <h2 class="headline" style="color: black; text-align: left;">
                                PRINCIPE ET POLITIQUE
                            </h2>
                            <p>L’AE fait de la recherche sur les enjeux au quels les étudiant font faces et élabore des solutions novatrices. Les membres de l’AE développent et examinent toutes les politiques afin de garantir que l’administration entende la véritable voie des étudiants.</p>
                        </li>
                    </ol>
                     <h5 style="color: black;"> Membres Du Bureau de L'AE-EGCIM</h5>
                    <div class="line"></div>&nbsp
                        <img src="<?= asset_url('images/bureau_etu_egcim1.png')?>">
                        <img src="<?= asset_url('images/bureau_etu_egcim2.png')?>">
                   
                </div>
            </div>
            
        </div> <!-- end of templatemo_content -->
        
       