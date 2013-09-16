<?php
$enterpriseVersions = array( "5.1", "5.0", "4.7", "4.6", "4.5", "4.4" );
$communityVersions = array( "2013.6", "2013.5", "2013.4", "2013.1", "2012.12" );
$oldVersions = array( "4.3.0", "4.2.0", "4.1.4", "4.0.7",/* "3.10.1", "3.9.5", "3.8.10"*/ );
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>eZ Publish API documentation</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
</head>
<body data-spy="scroll" data-target=".navbar">
    <div class="container">

        <header class="main-header" >
            <a href="/">
                <img class="main-logo" src="img/logo.png" alt="eZ Publish Community Server logo" />
            </a>
            <nav class="main-nav navbar">
                <div class="navbar-inner">
                    <ul class="nav nav-main mainnav">
                        <li><a href="#release_history">Release History</a></li>
                        <li><a href="#downloads">Downloads</a></li>
                        <li><a href="#other_resources">Other Resources</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="main">
            <article class="body span8">
                <section id="release_history">
                    <h3>Release history</h3>
                    <p><a href="/ezpublish_version_history/index.php">This graph</a> details the evolution of eZ Publish over time.</p>
                </section>
                <section id="downloads">
                    <h3>API documentation and Source</h3>
                    <label>Download Format<br />
                        <select class="download-format-select">
                            <option value="format-read">Read Online</option>
                            <option value="format-gz">Gzip</option>
                            <!--option value="format-bz2">Bzip 2</option-->
                            <option value="format-zip">Zip</option>
                        </select>
                    </label>
                    <label>
                        <input type="checkbox" class="toggle-all-formats" value="1" />
                        Show All Download Formats
                    </label>
                    <ul class="nav nav-tabs version-nav">
                        <li class="active"><a href="#Development" data-toggle="tab">Development</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Enterprise Edition <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <?php
                                foreach ( $enterpriseVersions as $version )
                                {
                                    echo '<li><a href="#v', str_replace( ".", "", $version ),'" data-toggle="tab">', $version, '</a></li>';
                                }
                                ?>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Community Edition <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <?php
                                foreach ( $communityVersions as $version )
                                {
                                    echo '<li><a href="#v', str_replace( ".", "", $version ),'" data-toggle="tab">', $version, '</a></li>';
                                }
                                ?>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#Older" class="dropdown-toggle" data-toggle="dropdown">
                                Older Releases <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <?php
                                foreach ( $oldVersions as $version )
                                {
                                    echo '<li><a href="#v', str_replace( ".", "", $version ),'" data-toggle="tab">', $version, '</a></li>';
                                }
                                ?>
                            </ul>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="Development" class="tab-pane active">
                            <h3>Development</h3>
                            <p class="muted">Automatically updated daily from github master branch.</p>

                            <h4>API Docs</h4>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="stack"></th>
                                        <th class="doxygen">Doxygen</th>
                                        <!--th class="docblox">DocBlox</th-->
                                        <th class="sami">Sami</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Legacy kernel</th>
                                        <td>
                                            <a class="download-link format-read" href="/doxygen/trunk/LS/html/index.html">Read Online</a>
                                            <a class="download-link format-gz format-bz2" href="/trunk/ezpublish-community_project-trunk-apidocs-doxygen-4X.tar.gz">Download (gz)</a>
                                            <a class="download-link format-zip" href="/trunk/ezpublish-community_project-trunk-apidocs-doxygen-4X.zip">Download (zip)</a>
                                            <!--span class="muted download-link format-bz2">Bz2 not available</span-->

                                        </td>
                                        <!--td>
                                            <span class="muted download-link format-all">Docblox Not Available</span>
                                        </td-->
                                        <td>
                                            <a class="download-link format-read" href="/sami/trunk/LS/html/index.html">Read Online</a>
                                            <a class="download-link format-gz format-bz2" href="/trunk/ezpublish-community_project-trunk-apidocs-sami-4X.tar.gz">Download (gz)</a>
                                            <a class="download-link format-zip" href="/trunk/ezpublish-community_project-trunk-apidocs-sami-4X.zip">Download (zip)</a>
                                            <!--span class="muted download-link format-bz2">Bz2 not available</span-->

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>5.x kernel</th>
                                        <td>
                                            <a class="download-link format-read" href="/doxygen/trunk/NS/html/index.html">Read Online</a>
                                            <a class="download-link format-gz format-bz2" href="/trunk/ezpublish-community_project-trunk-apidocs-doxygen-NS.tar.gz">Download (gz)</a>
                                            <a class="download-link format-zip" href="/trunk/ezpublish-community_project-trunk-apidocs-doxygen-NS.zip">Download (zip)</a>
                                            <!--span class="muted download-link format-bz2">Bz2 not available</span-->
                                        </td>
                                        <!--td>
                                            <span class="muted download-link format-all">Docblox Not Available</span>
                                        </td-->
                                        <td>
                                            <a class="download-link format-read" href="/sami/trunk/NS/html/index.html">Read Online</a>
                                            <a class="download-link format-gz format-bz2" href="/trunk/ezpublish-community_project-trunk-apidocs-sami-NS.tar.gz">Download (gz)</a>
                                            <a class="download-link format-zip" href="/trunk/ezpublish-community_project-trunk-apidocs-sami-NS.zip">Download (zip)</a>
                                            <!--span class="muted download-link format-bz2">Bz2 not available</span-->

                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <h4>Source</h4>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th class="stack">Legacy kernel</th>
                                        <td class="github">
                                            <a href="https://github.com/ezsystems/ezpublish-legacy" class="download-link format-all">Available via Github</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="stack">5.x kernel</th>
                                        <td class="github">
                                            <a href="https://github.com/ezsystems/ezpublish-kernel" class="download-link format-all">Available via Github</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="stack">Full 5.x stack</th>
                                        <td class="github">
                                            <a href="https://github.com/ezsystems/ezpublish-community" class="download-link format-all">Available via Github</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                        <?php
                        foreach ( $enterpriseVersions as $version ):
                            echo '<div id="v', str_replace( ".", "", $version ), '" class="tab-pane"><h3>', $version, ' Enterprise Edition</h3>';
                            $is5 = version_compare( $version, "5.0", ">=" );
			?>
                            <h4>API Docs</h4>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="stack"></th>
                                    <th class="doxygen">Doxygen</th>
                                    <!--th class="dockblox">DocBlox</th-->
                                    <th class="sami">Sami</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>Legacy kernel</th>
                                    <td>
                                        <a class="download-link format-read" href="/doxygen/<?= $version ?>.0/<?php if ( $is5 ) echo "LS/"; ?>html/index.html">Read Online</a>
                                        <a class="download-link format-gz format-bz2" href="/doxygen/<?= $version ?>.0/ezpublish-<?= $version ?>-apidocs-doxygen-<?= $is5 ? "LS" : "4X" ?>.tar.gz">Download (gz)</a>
                                        <a class="download-link format-zip" href="/doxygen/<?= $version ?>.0/ezpublish-<?= $version ?>-apidocs-doxygen-<?= $is5 ? "LS" : "4X" ?>.zip">Download (zip)</a>
                                        <!--span class="muted download-link format-bz2">Bz2 not available</span-->

                                    </td>
                                    <!--td>
                                        <p class="muted">Docblox not available</p>
                                    </td-->
                                    <td>
                                        <a class="download-link format-read" href="/sami/<?= $version ?>.0/<?php if ( $is5 ) echo "LS/"; ?>html/index.html">Read Online</a>
                                        <a class="download-link format-gz format-bz2" href="/sami/<?= $version ?>.0/ezpublish-<?= $version ?>-apidocs-sami-<?= $is5 ? "LS" : "4X" ?>.tar.gz">Download (gz)</a>
                                        <a class="download-link format-zip" href="/sami/<?= $version ?>.0/ezpublish-<?= $version ?>-apidocs-sami-<?= $is5 ? "LS" : "4X" ?>.zip">Download (zip)</a>
                                        <!--span class="muted download-link format-bz2">Bz2 not available</span-->
                                    </td>
                                </tr>
                                <?php if ( $is5 ): ?>
                                <tr>
                                    <th>5.x kernel</th>
                                    <td>
                                        <a class="download-link format-read" href="/doxygen/<?= $version ?>.0/NS/html/index.html">Read Online</a>
                                        <a class="download-link format-gz format-bz2" href="/doxygen/<?= $version ?>.0/ezpublish-<?= $version ?>-apidocs-doxygen-NS.tar.gz">Download (gz)</a>
                                        <a class="download-link format-zip" href="/doxygen/<?= $version ?>.0/ezpublish-<?= $version ?>-apidocs-doxygen-NS.zip">Download (zip)</a>
                                        <!--span class="muted download-link format-bz2">Bz2 not available</span-->
                                    </td>
                                    <!--td>
                                        <p class="muted">Docblox not available</p>
                                    </td-->
                                    <td>
                                        <a class="download-link format-read" href="/sami/<?= $version ?>.0/NS/html/index.html">Read Online</a>
                                        <a class="download-link format-gz format-bz2" href="/sami/<?= $version ?>.0/ezpublish-<?= $version ?>-apidocs-sami-NS.tar.gz">Download (gz)</a>
                                        <a class="download-link format-zip" href="/sami/<?= $version ?>.0/ezpublish-<?= $version ?>-apidocs-sami-NS.zip">Download (zip)</a>
                                        <!--span class="muted download-link format-bz2">Bz2 not available</span-->
                                    </td>
                                </tr>
                                <?php endif; ?>
                                </tbody>
                            </table>

                            <h4>Source</h4>
                            <p>Source is available via the <a href="http://support.ez.no">Enterprise Portal</a></p>
                        </div>
                        <?php
                        endforeach;
                        ?>

                        <?php
                        foreach ( $communityVersions as $version ):
                            echo '<div id="v', str_replace( ".", "", $version ), '" class="tab-pane"><h3>Community Release ', $version, '</h3>';
			?>
                            <h4>API Docs</h4>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="stack"></th>
                                    <th class="doxygen">Doxygen</th>
                                    <!--th class="docblox">DocBlox</th-->
                                    <th class="sami">Sami</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>Legacy kernel</th>
                                    <td>
                                        <a class="download-link format-read" href="/doxygen/<?= $version ?>/LS/html/index.html">Read Online</a>
                                        <a class="download-link format-gz format-bz2" href="/doxygen/<?= $version ?>/ezpublish-community_project-<?= $version ?>-apidocs-doxygen-LS.tar.gz">Download (gz)</a>
                                        <a class="download-link format-zip" href="/doxygen/<?= $version ?>/ezpublish-community_project-<?= $version ?>-apidocs-doxygen-LS.zip">Download (zip)</a>
                                        <!--span class="muted download-link format-bz2">Bz2 not available</span-->

                                    </td>
                                    <!--td>
                                        <span class="muted download-link format-all">Docblox Not Available</span>
                                    </td-->
                                    <td>
                                        <a class="download-link format-read" href="/sami/<?= $version ?>/LS/html/index.html">Read Online</a>
                                        <a class="download-link format-gz format-bz2" href="/sami/<?= $version ?>/ezpublish-community_project-<?= $version ?>-apidocs-sami-LS.tar.gz">Download (gz)</a>
                                        <a class="download-link format-zip" href="/sami/<?= $version ?>/ezpublish-community_project-<?= $version ?>-apidocs-sami-LS.zip">Download (zip)</a>
                                        <!--span class="muted download-link format-bz2">Bz2 not available</span-->

                                    </td>
                                </tr>
                                <tr>
                                    <th>5.x kernel</th>
                                    <td>
                                        <a class="download-link format-read" href="/doxygen/<?= $version ?>/NS/html/index.html">Read Online</a>
                                        <a class="download-link format-gz format-bz2" href="/doxygen/<?= $version ?>/ezpublish-community_project-<?= $version ?>-apidocs-doxygen-NS.tar.gz">Download (gz)</a>
                                        <a class="download-link format-zip" href="/doxygen/<?= $version ?>/ezpublish-community_project-<?= $version ?>-apidocs-doxygen-NS.zip">Download (zip)</a>
                                        <!--span class="muted download-link format-bz2">Bz2 not available</span-->
                                    </td>
                                    <!--td>
                                        <span class="muted download-link format-all">Docblox Not Available</span>
                                    </td-->
                                    <td>
                                        <a class="download-link format-read" href="/sami/<?= $version ?>/NS/html/index.html">Read Online</a>
                                        <a class="download-link format-gz format-bz2" href="/sami/<?= $version ?>/ezpublish-community_project-<?= $version ?>-apidocs-sami-NS.tar.gz">Download (gz)</a>
                                        <a class="download-link format-zip" href="/sami/<?= $version ?>/ezpublish-community_project-<?= $version ?>-apidocs-sami-NS.zip">Download (zip)</a>
                                        <!--span class="muted download-link format-bz2">Bz2 not available</span-->

                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <h4>Source</h4>
                            <p>Source is available via the <a href="http://share.ez.no/downloads/downloads/">downloads page on share.ez.no</a></p>
                        </div>
                        <?php
                        endforeach;
                        ?>

                        <?php
                        foreach ( $oldVersions as $version ):
                            echo '<div id="v', str_replace( ".", "", $version ), '" class="tab-pane"><h3>Version ', $version, '</h3>';
			?>

                            <h4>API Docs</h4>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="stack"></th>
                                    <th class="doxygen">Doxygen</th>
                                    <!--th class="dockblox">DocBlox</th-->
                                    <th class="sami">Sami</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>Legacy kernel</th>
                                    <td>
                                        <a class="download-link format-read format-zip" href="/doxygen/<?= $version ?>/html/index.html">Read Online</a>
                                        <a class="download-link format-gz format-bz2" href="/doxygen/<?= $version ?>/ezpublish-<?= substr( $version, 0, 3) ?>-apidocs-doxygen-4X.tar.gz">Download (gz)</a>
                                        <!--span class="muted download-link format-bz2">Bz2 not available</span-->
                                        <a class="download-link format-zip" href="/doxygen/<?= $version ?>/ezpublish-<?= substr( $version, 0, 3) ?>-apidocs-doxygen-4X.zip">Download (zip)</a>
                                    </td>
                                    <!--td>
                                        <span class="muted download-link format-all">Docblox Not Available</span>
                                    </td-->
                                    <td>
                                        <a class="download-link format-read format-zip" href="/sami/<?= $version ?>/html/index.html">Read Online</a>
                                        <a class="download-link format-gz format-bz2" href="/sami/<?= $version ?>/ezpublish-<?= substr( $version, 0, 3) ?>-apidocs-sami-4X.tar.gz">Download (gz)</a>
                                        <!--span class="muted download-link format-bz2">Bz2 not available</span-->
                                        <a class="download-link format-zip" href="/sami/<?= $version ?>/ezpublish-<?= substr( $version, 0, 3) ?>-apidocs-sami-4X.zip">Download (zip)</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <h4>Source</h4>
                            <p>Source is available via the <a href="http://share.ez.no/downloads/downloads/">downloads page on share.ez.no</a></p>
                        </div>
                        <?php
                        endforeach;
                        ?>
                    </div>
                </section>


                <section id="other_resources">
                    <h3>Other Resources</h3>
                    <div class="tile">
                        <h4>eZ Community website</h4>
                        <p><a href="http://share.ez.no">share.ez.no</a> is an online community dedicated to eZ Publish</p>
                        <a class="btn" href="http://share.ez.no/get-involved">Get involved!</a>
                    </div>
                    <div class="tile">
                        <h4>GitHub</h4>
                        <p>All eZ Publish development is available on Github for public access.</p>
                        <a class="btn" href="http://github.com/ezsystems">Access eZ code</a>
                    </div>
                    <div class="tile">
                        <h4>Jira</h4>
                        <p>Bugs and new features can be reported at jira.ez.no.</p>
                        <a class="btn" href="http://jira.ez.no">View Issues</a>
                    </div>
                    <div class="tile">
                        <h4>eZ Publish Extensions</h4>
                        <p><a href="http://projects.ez.no">Projects.ez.no</a> maintains a community directory of extensions. Older extensions are available via <a href="http://svn.ez.no/svn/extensions">SVN</a></p>
                        <a class="btn" href="http://projects.ez.no">Get Extensions</a>
                    </div>

                    <div class="tile">
                        <h4>eZpedia community wiki</h4>
                        <p>eZpedia is a community-edited repository of eZ Publish information</p>
                        <a class="btn" href="http://share.ez.no/get-involved">Read eZpedia</a>
                    </div>
                    <div class="tile">
                        <h4>Feeds</h4>
                        <p>Planet eZ Publish aggregates posts from a large number of eZ Publish blogs.</p>
                        <a class="btn" href="http://www.planetezpublish.org/">Read Posts</a>
                    </div>
                    <div class="tile">
                        <h4>Documentation</h4>
                        <p>Official eZ Publish documentation for the current release can be found online.</p>
                        <a class="btn" href="http://doc.ez.no/">Legacy Docs</a><br />
                        <a class="btn" href="http://confluence.ez.no/">5.x Docs</a>
                    </div>
                </section>

            </article>
            <aside class="news span3">
                <h4>News</h4>
                <ul>

                    <li><p>2013.7.23 : added docs for eZP 5.1, 2013.5 and 2013.6</p></li>

                    <li><p>2013.4.29 : added docs for eZP 4.7, 5.0, 2012.12, 2013.1 and 2013.4; fixed links to Github</p></li>

                    <li><p>2013.1.14 : upgraded doxygen and piwik; added doc for latest CP versions; added more links to sources on github</p></li>

                    <li><p>2012.07.26 : added documentation for the CP versions; a bit of styling love...</p></li>

                    <li><p>2012.06.13 : updated doxygen and piwik</p></li>

                    <li><p>2012.01.23 : updated doxygen to 1.7.6.1, docblox 1.8.1 and phpdoc 1.4.4; added documentation for versions 4.6 and 4.5; changed documentation for all branches (except trunk) - it is now generated from release versions, not from git branches anymore</p></li>

                    <li><p>2011.08.28 : updated doxygen to 1.5.1; added documentation generated with the docblox tool</p></li>

                    <li><p>2011.03.29 : moved to a new server; disabled access stats, viewvc, websvn, statsvn and SVN access; added phpdoc-generated docs; updated doxygen to 1.7.4; added some directories to those scanned for php classes</p></li>

                    <li><p>2010.10.12 : added the 4.4 stable branch; reactivated doc generation and source tarball creation from github sources for all branches starting from 4.0</p></li>

                    <li><p>2010.04.13 : added the 4.3 stable branch;<br/>updated websvn, viewvc, statsvn and doxygen;<br/>added <a href="/piwik">Piwik stats</a></p></li>

                    <li><p>2009.09.30 : added the 4.2 stable branch</p></li>

                    <li><p>2009.09.22 : updated viewvc to version 1.1.2</p></li>

                    <li><p>2009.05.20 : updated php to version 5 to fix problems with websvn on some php files; enabled http compression</p></li>

                    <li><p>2009.05.18 : access statistics are back for everybody; updated viewvc to version 1.1.0, websvn to version 2.2.1</p></li>

                    <li><p>2009.05.07 : added a websvn view to the "extensions" svn repository and changed its servername from zev.ez.no to svn.ez.no; Added statsvn-generated stats to all eZP branches</p></li>

                    <li><p>2009.05.06 : The api docs generated via Doxygen are now available for download as a zip files</p></li>

                    <li><p>2009.04.17 : The tools installed on the community server have been upgraded to the latest available version (viewvc, doxygen,
                        statsvn, websvn2). Websvn 1 and ViewCVS have been removed as old and unmaintained. Added link to 4.1 branch and corrected the generation scripts</p></li>

                    <li><p>2008.03.31 : The community repository has been made read-only on the 31st of March 2008 and will rest in peace, in favor of <a href="http://projects.ez.no">eZ Projects</a>.
                        We recommend everyone to move their extensions to eZ Projects as soon as possible. For more information, please read
                        <a href="http://blog.coomanskristof.be/2008/02/27/pubsvn-community-subversion-repository-closing-31st-of-march/">Kristof's blog article regarding this topic</a>.
                    </p></li>

                    <li><p>Some extensions have been made read-only in the community repository, because they are now using the project spaces at
                        <a href="http://projects.ez.no">eZ projects</a> instead. eZpedia offers
                        <a href="http://ezpedia.org/wiki/en/ez/pubsvn_commit_access_restrictions">a list of these read-only paths in the community
                            repository</a>. We recommend everyone to move their extensions to eZ projects. If you do so then send a list with the related
                        paths in the community repository to <a href="mailto:kristof.coomans@telenet.be">Kristof</a> so he can make them read-only.
                    </p></li>

                    <!--<h2 id="nextgen_php5">The nextgen_php5 repository is deprecated</h2>-->
                    <li><p>The nextgen_php5 repository is deprecated. It contains a PHP 5 port of eZ Publish 3.9. It was started by the eZ Publish Community. eZ Systems has adopted the port and based on the initial work done by the community, they were able to release eZ Publish 4 in December 2007. It is recommended that you use the official version from eZ Systems, because no further updates will be done on the community port.</p></li>

                </ul>

            </aside>
        </div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

    
<!-- Piwik -->
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://piwik.share.ez.no/" : "http://piwik.share.ez.no/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 1);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://piwik.share.ez.no/piwik.php?idsite=1" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tracking Tag -->

</body>
</html>
