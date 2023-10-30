<?php
if (!function_exists('flexslider_shortcode')) :
    function flexslider_shortcode()
    {
        return '
<div id="flexslider-wrapper">
  <div id="controls-container">
    <ul id="new-container-for-flexslider-controls">
      <li class="eighty-four flex-active"><a title="1984" href="#">&nbsp;</a></li>
      <li class="eighty-five"><a title="1985" href="#">&nbsp;</a></li>
      <li class="eighty-six"><a title="1986" href="#">&nbsp;</a></li>
      <li class="eighty-seven"><a title="1987" href="#">&nbsp;</a></li>
      <li class="eighty-eight"><a title="1988" href="#">&nbsp;</a></li>
      <li class="eighty-nine"><a title="1989" href="#">&nbsp;</a></li>
      <li class="ninety"><a title="1990" href="#">&nbsp;</a></li>
      <li class="ninety-one"><a title="1991" href="#">&nbsp;</a></li>
      <li class="ninety-two"><a title="1992" href="#">&nbsp;</a></li>
      <li class="ninety-three"><a title="1993" href="#">&nbsp;</a></li>
      <li class="ninety-four"><a title="1994" href="#">&nbsp;</a></li>
      <li class="ninety-five"><a title="1995" href="#">&nbsp;</a></li>
      <li class="ninety-four"><a title="1996" href="#">&nbsp;</a></li>
      <li class="ninety-three"><a title="1997" href="#">&nbsp;</a></li>
      <li class="ninety-four"><a title="1998" href="#">&nbsp;</a></li>
      <li class="ninety-three"><a title="1999" href="#">&nbsp;</a></li>
      <li class="two-thousand"><a title="2000" href="#">&nbsp;</a></li>
      <li class="two-thousand-one"><a title="2001" href="#">&nbsp;</a></li>
      <li class="two-thousand-two"><a title="2002" href="#">&nbsp;</a></li>
    </ul>
  </div>
  <div class="flexslider">
    <div class="flex-viewport" styles="overflow:hidden; position:relative;">
    <ul class="slides">
      <li>
        <div class="initial-item">
          <div class="year">March 1984</div>
          <div class="media portrait" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/miners-strike-picket.jpg" alt="Miners strike picket" /></div>
          <div class="headline portrait" style="height: auto;">Miner</div>
          <div class="text portrait" style="height: auto;">The National Union of Mineworkers (NUM) gives official backing to an indefinite strike of 70,000 men. The strike lasts one year, ending in March 1985.</div>
        </div>
        <div class="second-item">
          <div class="year">October 1984</div>
          <div class="media" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/grand-hotel-following-bomb-attack-1984.jpg" alt="Grand Hotel, Brighton" /></div>
          <div class="headline">IRA bomb the Conservative Party Conference in Brighton</div>
          <div class="text">An IRA bomb explodes at the Grand Hotel, Brighton during a Conservative Party Conference, killing four people.</div>
        </div>
      </li>
      <li>
        <div class="initial-item">
          <div class="year portrait">September 1985</div>
          <div class="media portrait" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/titanic-wreck.jpg" alt="Titanic wreck" /></div>
          <div class="headline portrait">Wreck of RMS Titanic found</div>
          <div class="text portrait">The wreck of RMS Titanic is located. The first photos and films are taken 73 years after it sank.</div>
        </div>
        <div class="second-item">
          <div class="year">September 1985</div>
          <div class="media" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/brixton-riots.jpg" alt="Brixton " /></div>
          <div class="headline">Riots in Birmingham and London</div>
          <div class="text">Rioting starts in Birmingham and later in Brixton after the shooting of a black woman during a police search of her house. The unrest breaks out later on the Broadwater Farm Estate in Tottenham, resulting in the death of a police officer.</div>
          <div class="attribution">Image attributed to Kim Aldis</div>
        </div>
      </li>
      <li>
        <div class="initial-item">
          <div class="year portrait">April 1986</div>
          <div class="media portrait" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/beirut-1982.jpg" alt="Beirut" /></div>
          <div class="headline portrait">John McCarthy kidnapped</div>
          <div class="text portrait">Journalist John McCarthy is kidnapped during the Lebanon hostage crisis. Church of England envoy, Terry Waite, is kidnapped in January 1987 while negotiating for his release. They are both eventually freed in 1991.</div>
          <div class="attribution portrait">Image attributed to FunkMonk</div>
        </div>
        <div class="second-item">
          <div class="year">October 1986</div>
          <div class="media" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/aids-campaign.jpg" alt="AIDS campaign" /></div>
          <div class="headline">AIDS health campaign launched</div>
          <div class="text">The Government launches a £20m campaign to warn about the dangers of AIDS.</div>
        </div>
      </li>
      <li>
        <div class="initial-item">
          <div class="year portrait">October 1987</div>
          <div class="media portrait" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/black-monday-dow-jones-19-july-1987-1988.jpg" alt="Black Monday" /></div>
          <div class="headline portrait">Black Monday</div>
          <div class="text portrait">Wall Street crash wipes £50bn off the value of shares on the London Stock Exchange.</div>
        </div>
        <div class="second-item">
          <div class="year">November 1987</div>
          <div class="media" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/cenotaph-enniskillen.jpg" alt="Cenotaph, Enniskillen" /></div>
          <div class="headline">Remembrance Day bombing</div>
          <div class="text">11 people are killed by an IRA bomb at a Remembrance Day service in Enniskillen, Northern Ireland.</div>
          <div class="attribution">Image attributed to Dean Molyneaux</div>
        </div>
      </li>
      <li>
        <div class="initial-item">
          <div class="year portrait">July 1988</div>
          <div class="media portrait" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/pipa-alpha.jpg" alt="Piper Alpha" /></div>
          <div class="headline portrait">Piper Alpha oil rig disaster</div>
          <div class="text portrait">An explosion on the North Sea oil rig Piper Alpha kills 170 people.</div>
          <div class="attribution portrait">Image attributed to Elliott Simpson</div>
        </div>
        <div class="second-item">
          <div class="year">November 1988</div>
          <div class="media" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/lockerbie-disaster-memorial.jpg" alt="Lockerbie" /></div>
          <div class="headline">Lockerbie bombing</div>
          <div class="text">Pan Am Flight 103 explodes over the Scottish town of Lockerbie, killing 270 people, including 11 inhabitants.</div>
          <div class="attribution ">Image attributed to Dean Molyneaux</div>
        </div>
      </li>
      <li>
        <div class="initial-item">
          <div class="year portrait">August 1989</div>
          <div class="media portrait" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/cannon-street-railway-bridge.jpg" alt="Marchioness Memorial" /></div>
          <div class="headline portrait">Marchioness disaster</div>
          <div class="text portrait">The pleasure boat, the Marchioness, sinks in the River Thames after colliding with a barge, killing 51 people.</div>
        </div>
        <div class="second-item">
          <div class="year">November 1989</div>
          <div class="media" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/berlin-wall-brandenburg-gat.jpg" alt="Berlin Wall Brandenburg Gate" /></div>
          <div class="headline">Fall of the Berlin Wall</div>
          <div class="text">The demolition of the Berlin Wall marks the beginning of the end of the Cold War.</div>
          <div class="attribution ">Image attributed to Sue Ream</div>
        </div>
      </li>
      <li>
        <div class="initial-item">
          <div class="year portrait">May 1990</div>
          <div class="media portrait" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/cow-bse.jpg" alt="BSE" /></div>
          <div class="headline portrait">France bans imports of British beef </div>
          <div class="text portrait">France bans British beef and live cattle imports over fears of Bovine Spongiform Encephalopathy (BSE), commonly known as mad cow disease.</div>
        </div>
        <div class="second-item">
          <div class="year">November 1990</div>
          <div class="media" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/thatcher-reviews-troops.jpg" alt="Margaret Thatcher" /></div>
          <div class="headline">Margaret Thatcher resigns</div>
          <div class="text">Margaret Thatcher fails to win an outright victory in a leadership contest and resigns as leader of the Conservative Party and Prime Minister.  John Major succeeds her.</div>
          <div class="attribution ">Image attributed to Jay Galvin</div>
        </div>
      </li>
      <li>
        <div class="initial-item">
          <div class="year portrait">January 1991</div>
          <div class="media portrait" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/tank-in-desert-storm.jpg" alt="Tank in Desert Storm" /></div>
          <div class="headline portrait">Gulf War begins</div>
          <div class="text portrait">The Gulf War begins with the aerial bombardment of Iraq.</div>
        </div>
        <div class="second-item">
          <div class="year">February 1991</div>
          <div class="media" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/downing-street-sign.jpg" alt="Downing Street sign" /></div>
          <div class="headline">10 Downing Street attacked</div>
          <div class="text">The Provisional IRA launch a mortar bomb attack on 10 Downing Street while the Cabinet is in session.</div>
        </div>
      </li>
      <li>
        <div class="initial-item">
          <div class="year portrait">February 1992</div>
          <div class="media portrait" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/maastricht-signature-great-britain.jpg" alt="Maastricht Treaty signature" /></div>
          <div class="headline portrait">Maastricht Treaty signed</div>
          <div class="text portrait">The signing of the Maastricht Treaty creates the European Union and paves the way for the  creation of a single European currency.</div>
        </div>
        <div class="second-item">
          <div class="year">September 1992</div>
          <div class="media" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/bankofengland.jpg" alt="Bank of England" /></div>
          <div class="headline">Black Wednesday</div>
          <div class="text">The government suspends Britain</div>
        </div>
      </li>
      <li>
        <div class="initial-item">
          <div class="year portrait">April 1993</div>
          <div class="media portrait" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/the-stephen-lawrence-centre.jpg" alt="The Stephen Lawrence Centre" /></div>
          <div class="headline portrait">Murder of Stephen Lawrence</div>
          <div class="text portrait">Black teenager Stephen Lawrence is murdered while waiting for a bus on the evening of 22 April 1993.</div>
        </div>
        <div class="second-item">
          <div class="year">December 1993</div>
          <div class="media" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/ni-map.jpg" alt="Northern Ireland map" /></div>
          <div class="headline">UK and Irish governments sign declaration</div>
          <div class="text">The Downing Street Declaration is signed by the UK and Irish governments to promote talks on the future of Northern Ireland.</div>
        </div>
      </li>
      <li>
        <div class="initial-item">
          <div class="year portrait">June 1994</div>
          <div class="media portrait" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/chinook-monument-mull-of-kintyre.jpg" alt="Chinook monument" /></div>
          <div class="headline portrait">Chinook helicopter crash</div>
          <div class="text portrait">A Chinook helicopter crashes in the Mull of Kintyre killing 29 people.</div>
        </div>
        <div class="second-item">
          <div class="year">July 1994</div>
          <div class="media" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/tony-blair.jpg" alt="Tony Blair" /></div>
          <div class="headline">Tony Blair becomes Leader of the Labour Party, following the death of John Smith</div>
          <div class="text">Tony Blair wins the Labour leadership contest and becomes Leader of the Labour Party, following the death of John Smith.</div>
        </div>
      </li>
      <li>
        <div class="initial-item">
          <div class="year portrait" style="height: auto;">February 1995</div>
          <div class="media portrait" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/chicago-bot.jpg" alt="Trading floor image" /></div>
          <div class="headline portrait">Barings Bank collapses</div>
          <div class="text portrait">Barings merchant bank goes into receivership following heavy losses in its Singapore Office.</div>
          <div class="attribution portrait">Image attributed to <a href="http://commons.wikimedia.org/wiki/File:Chicago_bot.jpg" target="_blank" title="External website - opens in a new window">Wikipedia</a></div>
        </div>
        <div class="second-item">
          <div class="year">July 1995</div>
          <div class="media" style="height: auto;" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/sarajevo.jpg" alt="Sarajevo" /></div>
          <div class="headline">War in Bosnia and Herzegovina begins</div>
          <div class="text">British forces are sent to Sarajevo to help relieve the long-running siege in the city. </div>
        </div>
      </li>
      <li>
        <div class="initial-item">
          <div class="year portrait">March 1996</div>
          <div class="media portrait" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/dunblane-standing-stone.jpg" alt="Dunblane standing stone" /></div>
          <div class="headline portrait">Dunblane massacre</div>
          <div class="text portrait">A gunman kills 16 children, their teacher and himself at a primary school in Dunblane, Scotland.</div>
        </div>
        <div class="second-item">
          <div class="year">July 1996</div>
          <div class="media" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/dolly-sheep-scotland.jpg" alt="Dolly the sheep" /></div>
          <div class="headline">First successfully cloned mammal in UK</div>
          <div class="text">Dolly the sheep is the first mammal cloned from an adult cell, rather than being conceived naturally. This opened up the ethnical debate on genetic engineering.</div>
        </div>
      </li>
      <li>
        <div class="initial-item">
          <div class="year portrait">May 1997</div>
          <div class="media portrait" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/no10-downing-street-door.jpg" alt="10 Downing Street door" /></div>
          <div class="headline portrait">Labour win general election</div>
          <div class="text portrait">Tony Blair wins a landslide general election and becomes Prime Minister.</div>
        </div>
        <div class="second-item">
          <div class="year">August 1997</div>
          <div class="media" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/princess-diana-funeral-st-james-park-1997.jpg" alt="Prncess Diana funeral" /></div>
          <div class="headline">Princess Diana dies in car crash</div>
          <div class="text">Diana Princess of Wales and Dodi Fayed die in a car crash in Paris after being chased by paparazzi.</div>
        </div>
      </li>
      <li>
        <div class="initial-item">
          <div class="year portrait">April 1998</div>
          <div class="media portrait" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/good-friday-agreement.jpg" alt="Good Friday agreement" /></div>
          <div class="headline portrait">Good Friday Agreement signed</div>
          <div class="text portrait">The agreement marks a major political development in the Northern Ireland peace process.</div>
        </div>
        <div class="second-item">
          <div class="year">August 1998</div>
          <div class="media" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/omagh-bomb-memorial.jpg" alt="Omagh bomb memorial" /></div>
          <div class="headline">Omagh bombing</div>
          <div class="text">Opposed to the Good Friday Agreement, the Real IRA bomb the town of Omagh, killing 29 people.</div>
        </div>
      </li>
      <li>
        <div class="initial-item">
          <div class="year portrait">January 1999</div>
          <div class="media portrait" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/euro.jpg" alt="The Euro currency symbol" /></div>
          <div class="headline portrait">The Euro is launched</div>
          <div class="text portrait">The European single currency, the Euro, becomes the new official currency of 11 Member states.</div>
        </div>
        <div class="second-item">
          <div class="year">May 1999</div>
          <div class="media" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/welsh-assembly-chamber-seating.jpg" alt="Welsh Assembly chamber" /></div>
          <div class="headline">Scottish and Welsh elections</div>
          <div class="text">The first elections to the new Scottish Parliament and Welsh Assembly are held, following a referendum to devolve some powers to respective governments in 1997.</div>
        </div>
      </li>
      <li>
        <div class="initial-item">
          <div class="year portrait">January 2000</div>
          <div class="media portrait" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/millennium-dome.jpg" alt="Millennium Dome" /></div>
          <div class="headline portrait">Millennium Dome opens</div>
          <div class="text portrait">The Millennium Dome was commissioned to house an exhibition celebrating the beginning of the third millennium. Although the original exhibition was dismantled, the structure is now used as a popular music venue.</div>
        </div>
        <div class="second-item">
          <div class="year">October 2000</div>
          <div class="media" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/hatfield.jpg" alt="Hatfield" /></div>
          <div class="headline">Hatfield rail crash</div>
          <div class="text">A train derails south of Hatfield station, killing four people.</div>
        </div>
      </li>
      <li>
        <div class="initial-item">
          <div class="year portrait">February 2001</div>
          <div class="media portrait" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/banbury-foot-and-mouth-notice-attrib-wipsenade.jpg" alt="A cow, foot and mouth" /></div>
          <div class="headline portrait">Foot and mouth disease</div>
          <div class="text portrait">Foot and mouth disease is detected in British herds, prompting a mass slaughter of animals as a precautionary measure. </div>
        </div>
        <div class="second-item">
          <div class="year">September 2001</div>
          <div class="media" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/unattributed-photograph-september-11th-terrorist-attack-on-world-trade-center.jpg" alt="9/11 terror attack" /></div>
          <div class="headline">9/11</div>
          <div class="text">The Islamist militant group al-Qaeda hijack four passenger planes, crashing two into New York’s World Trade Centre, and killing nearly 3,000 people. This instigated the war in Afghanistan, which begins in October.</div>
          <div class="attribution ">Image courtesy of the Prints and Photographs Division, Library of Congress</div>
        </div>
      </li>
      <li>
        <div class="initial-item">
          <div class="year portrait">April 2002</div>
          <div class="media portrait" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/golden-jubilee-palace.jpg" alt="Golden Jubilee at Buckingham Palace" /></div>
          <div class="headline portrait">Queen Elizabeth II celebrates the Golden Jubilee</div>
          <div class="text portrait">The Queen addresses Parliament in a speech marking 50 years on the throne. This follows a difficult year that saw the deaths of both her sister, Princess Margaret, and the Queen mother.</div>
        </div>
        <div class="second-item">
          <div class="year">May 2002</div>
          <div class="media" style="height: auto;"><img src="/wp-content/themes/tna/images/about/20-year-rule/potters-bar.jpg" alt="Potters Bar" /></div>
          <div class="headline">Potters Bar rail crash</div>
          <div class="text">A train derails at Potters bar, killing seven people.</div>
          <div class="attribution ">Image attributed to Nigel Cox</div>
        </div>
      </li>
    </ul>
    </div>
    <ul class="flex-direction-nav">
        <li><a class="flex-prev" href="#">Previous</a></li>
        <li><a class="flex-next" href="#">Next</a></li>
    </ul>
  </div>
</div>
  ';
    }
endif;
add_shortcode('20-year-rule-slider', 'flexslider_shortcode');

if (!function_exists('translation_accordian_shortcode')) :
    function translation_accordian_shortcode($atts, $content = null)
    {

        $a = shortcode_atts(array(
            'title' => 'Translation',
        ), $atts);
        return '<details class="accordion hue-grey-lightest margin-bottom-medium" title="View translation">
<summary>' . esc_attr($a['title']) . '</summary>
<div class="accordion-content pad-bottom-medium"><p>' . $content . '</p></div>
</details>';
    }
endif;
add_shortcode('translation', 'translation_accordian_shortcode');
