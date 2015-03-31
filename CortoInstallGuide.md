# Introduction #

Corto is configured entirely by SAML2 metadata - no other configuration is needed.

Corto runs in demo mode right out of the box, using corto.php as it's 'landing page' and the metadata file `metadata/corto.optimized.metadata.php` as a pre-prepared metadafile.

`index.php` works as a simple application/sp which allows you to immediately test the downloaded version of corto.

Corto uses a simple naming convention for mapping a Corto instance to the its metadata: if you use `myproxy.php` as the landing page the metadata import script should be named `myproxy.mdmgmt.php` and be placed in the metadata directory. `myproxy.mdmgmt.php` should produce two metadata files:

`myproxy.optimized.metadata.php` and `myproxy.public.metadata.php`.

## Configuration of Corto in a non-demo mode is done in two steps ##

We assume that we are installing in `/var/www/corto` and accessable at http://example.com/corto
<ol>
<li>Check out the Corto code from the repository<br>
<pre><code>cd /var/www<br>
svn checkout http://corto.googlecode.com/svn/trunk/ corto<br>
</code></pre>
</li>
<li>Create a virtual host that maps <code>http://example.com/corto</code> to <code>/var/www/corto/public</code></li>
<li>Test that the setup is working by going to <code>http://example.com/corto</code></li>
<li>Create the 'landing page' by copying that index.php to myproxy.php<br>
<pre><code>cp /var/www/corto/public/index.php /var/www/corto/public/myproxy.php<br>
</code></pre>
</li>
<li>Configure a metadata import script<br>
<pre><code>cp /var/www/corto/metadata/corto.mdmgmt.php /var/www/corto/metadata/myproxy.mdmgmt.php<br>
</code></pre>
</li>
<li>Create metadata (We assume that we have metadata for both an SP and an IdP in SAML 2.0 XML format)<br>
Edit `/var/www/corto/metadata/myproxy.mdmgmt.php<br>
<br>
The <code>$metadatasources</code> contains pointers to all metadata used by Corto.<br>
<br>
Metadata can be imported as <code>private</code>, <code>public</code> or <code>remote</code>:<br>
<ul><li><code>private</code> is for non-public metadata eg. encryption keys for hosted entities<br>
</li><li><code>public</code> is for public metadata for hosted entities. 'public' metadata will be served at the entity's well known address ie. the entityID.<br>
</li><li><code>remote</code> is for remote entities</li></ul>

There are two different handlers <code>php</code> and <code>xml</code> for metadata in different formats:<br>
<ul><li><code>php</code> points to a file on the disc in corto php format (ie. xml as php)<br>
</li><li><code>xml</code> points to an xml file either on disk or on a remote location. All protocols recognized by php can be used.<br>
<pre><code>$metadatasources = array(<br>
    'public:php:' . dirname(__FILE__) . '/../metadata/corto.meta.php',<br>
    'remote:xml:' . dirname(__FILE__) . '/../metadata/mysp.meta.xml',<br>
    'remote:xml:' . dirname(__FILE__) . '/../metadata/myidp.meta.xml',<br>
);<br>
</code></pre>
All metadata sources are merged into one metadata document, ie. merging duplicate entities. Allowing public and   private metadata to be merged for internal use in Corto. You can parse in metadata that contains commen metadata   used   for all entitites by using <code>_COMMON_</code> as the entityID. The metadata <code>corto.meta.php</code> is Cortos own internal metadata.<br>
</li>
<li>Run the <code>myproxy.mdmgmt.php</code> script<br>
<pre><code>php /var/www/corto/metadata/myproxy.mdmgmt.php<br>
</code></pre>
</li></ul><blockquote>Now Corto has produced metadata fit for Corto consumtion.<br>
</li>
<li>Metadata for Corto can be located at<br>
<pre><code>http://example.com/corto/myproxy.php/corto<br>
</code></pre>
</li>
<li>Configure you sp and idp with metadata from corto.</li>
<li>You should now be able to login to your service via Corto to your IdP.</li>
</ol>
<h1>NOTES</h1>
Always use https in production