=====[HTTP HEADERS]=====================================

- HEADER STRUCTURE => NAME: VALUE 

- HTTP HEADERS ARE USED TO PASS ADDITIONAL 
INFORMATION BETWEEN THE CLIENT AND THE SERVER 
VIA THE HTTP REQUESTS AND RESPONSES

- MOST HTTP HEADERS ARE OPTIONAL
- COOKIES ARE ALSO PASSED AS HEADERS (THIS DOES
NOT INCLUDE COOKIES THAT ARE CREATED WITH JS)

header() => THIS SETS A HEADER IN AN HTTP 
RESPONSE TO BE SENT TO THE BROWSER

headers_list() => THIS GETS THE HEADERS THAT 
HAVE BEEN BEEN SENT OR WILL BE SENT IN A 
HTTP RESPONSE TO THE BROWSER

headers_sent() => THIS CHECKS IF THE HEADERS
HAVE ALREADY BEEN SENT


//===[EXAMPLE OF AN HTTP REQUEST AND HEADERS]=======================================================

GET /tutorials/other/top-20-mysql-best-practices/ HTTP/1.1
Host: code.tutsplus.com
User-Agent: Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.5) Gecko/20091102 Firefox/3.5.5 (.NET CLR 3.5.30729)
Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
Accept-Language: en-us,en;q=0.5
Accept-Encoding: gzip,deflate
Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7
Keep-Alive: 300
Connection: keep-alive
Cookie: PHPSESSID=r2t5uvjq435r4q7ib3vtdjq120
Pragma: no-cache
Cache-Control: no-cache


//===[EXAMPLE OF AN HTTP RESPONSE AND HEADERS]=======================================================

HTTP/1.x 200 OK
Transfer-Encoding: chunked
Date: Sat, 28 Nov 2009 04:36:25 GMT
Server: LiteSpeed
Connection: close
X-Powered-By: W3 Total Cache/0.8
Pragma: public
Expires: Sat, 28 Nov 2009 05:36:25 GMT
Etag: "pub1259380237;gz"
Cache-Control: max-age=3600, public
Content-Type: text/html; charset=UTF-8
Last-Modified: Sat, 28 Nov 2009 03:50:37 GMT
X-Pingback: https://code.tutsplus.com/xmlrpc.php
Content-Encoding: gzip
Vary: Accept-Encoding, Cookie, User-Agent
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">







