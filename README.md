yii-SteamGroupNews
==================

Display Steam group announcements in a Yii widget.

Installation
-------------------------------
Copy this repo to your app/ directory.  The directory structure within is the same.


Usage
------------------------------
Call the widget with, at minimum, a `group` parameter anywhere in your view.

    <?php 
         $this->widget('application.extensions.steamgroupnews.SteamGroupNews', array(
            'title'=>'News',
            'group'=>'FirePowered',
            'limit'=>4
        )); 
    ?>

The resulting HTML from the above:

    <h3>News</h3>
    <ul class="list-unstyled iconList borderList">
        <li><a href="http://steamcommunity.com/groups/FirePowered/announcements/detail/165825431204678238">Servers Updated</a></li>
        <li><a href="http://steamcommunity.com/groups/FirePowered/announcements/detail/165824705408852002">Virginia Snowplow Beta Server</a></li>
        <li><a href="http://steamcommunity.com/groups/FirePowered/announcements/detail/165824705339493005">Snowplow Beta Server</a></li>
        <li><a href="http://steamcommunity.com/groups/FirePowered/announcements/detail/165824704923723229">Servers Updated</a></li>
    </ul>


Default Values
----------------------------
* **title** - "Latest News"
* **limit** - 5


