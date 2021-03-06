<?xml version='1.0' encoding='UTF-8' ?>
<xsl:stylesheet version='1.0' xmlns:xsl='http://www.w3.org/1999/XSL/Transform'>
    <xsl:template match='/'>
        <html>
            <body>
                <!--Artist-->
                <table border="1">
                    <tr bgcolor="#EFEBCE">
                        <th>Artist ID</th>
                        <th>First name</th>
                        <th>Last Name</th>
                        <th>Birth Year</th>
                        <th>Death Year</th>
                        <th>Place of Living</th>
                    </tr>
                    <xsl:for-each select="./artworks/artwork/artists/artist">
                        <tr bgcolor="#D6CE93">
                            <td><xsl:value-of select="@ID"/></td>
                            <td><xsl:value-of select="./firstname"/></td>
                            <td><xsl:value-of select="./lastname" /></td>
                            <td><xsl:value-of select="./birth"/></td>
                            <td><xsl:value-of select="./death"/></td>
                            <td><xsl:value-of select="./pol"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
                <!-- Artwork -->
                <br></br>
                <table border="1">
                    <tr bgcolor="#EFEBCE">
                        <th>Artwork ID</th>
                        <th>Piece</th>
                        <th>Artist Name</th>
                        <th>Type</th>
                        <th>Dimensions</th>
                        <th>Year</th>
                        <th>Price</th>
                    </tr>
                    <xsl:for-each select="./artworks/artwork">
                        <tr bgcolor="#D6CE93">
                            <td><xsl:value-of select="@ID"/></td>
                            <td><xsl:value-of select="./piece"/></td>
                            <td><xsl:value-of select="./artists/artist/firstname"/><br></br> <xsl:value-of select="./artists/artist/lastname" /></td>
                            <td><xsl:value-of select="./type"/></td>
                            <td><xsl:value-of select="./dimension"/></td>
                            <td><xsl:value-of select="./year"/></td>
                            <td><xsl:value-of select="./price"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
                <!--Museums-->
                <br></br>
                <table border="1">
                    <tr bgcolor="#EFEBCE">
                        <th>Museum ID</th>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Address</th>
                        <th>Date of Establishment</th>
                    </tr>
                    <xsl:for-each select="./artworks/artwork/museums/museum">
                        <tr bgcolor="#D6CE93">
                            <td><xsl:value-of select="@ID"/></td>
                            <td><xsl:value-of select="./name"/></td>
                            <td><xsl:value-of select="./location" /></td>
                            <td><xsl:value-of select="./address"/></td>
                            <td><xsl:value-of select="./doe"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
                <!--Galleries-->
                <br></br>
                <table border="1">
                    <tr bgcolor="#EFEBCE">
                        <th>Gallery ID</th>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Address</th>
                        <th>Date of Establishment</th>
                    </tr>
                    <xsl:for-each select="./artworks/artwork/galleries/gallery">
                        <tr bgcolor="#D6CE93">
                            <td><xsl:value-of select="@ID"/></td>
                            <td><xsl:value-of select="./name"/></td>
                            <td><xsl:value-of select="./location" /></td>
                            <td><xsl:value-of select="./address"/></td>
                            <td><xsl:value-of select="./doe"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
                <!--Genre-->
                <br></br>
                <table border="1">
                    <tr bgcolor="#EFEBCE">
                        <th>Genre ID</th>
                        <th>Genre</th>
                    </tr>
                    <xsl:for-each select="./artworks/artwork">
                        <tr bgcolor="#D6CE93">
                            <td><xsl:value-of select="@ID"/></td>
                            <td><xsl:value-of select="./genre"/></td>
                        </tr>
                    </xsl:for-each>
                    <xsl:for-each select="./artworks/artwork/artists/artist/genres/genre">
                        <tr bgcolor="#D6CE93">
                            <td><xsl:value-of select="../../@ID"/></td>
                            <td><xsl:value-of select="./name"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
                <!--Images-->
                <br></br>
                <table border="1">
                    <tr bgcolor="#EFEBCE">
                        <th>Image ID</th>
                        <th>Name</th>
                    </tr>
                    <xsl:for-each select="./artworks/artwork">
                        <tr bgcolor="#D6CE93">
                            <td><xsl:value-of select="@ID"/></td>
                            <td><xsl:value-of select="./image"/></td>
                        </tr>
                    </xsl:for-each>
                    <xsl:for-each select="./artworks/artwork/museums/museum">
                        <tr bgcolor="#D6CE93">
                            <td><xsl:value-of select="@ID"/></td>
                            <td><xsl:value-of select="./image"/></td>
                        </tr>
                    </xsl:for-each>
                    <xsl:for-each select="./artworks/artwork/artists/artist">
                        <tr bgcolor="#D6CE93">
                            <td><xsl:value-of select="@ID"/></td>
                            <td><xsl:value-of select="./image"/></td>
                        </tr>
                    </xsl:for-each>
                    <xsl:for-each select="./artworks/artwork/galleries/gallery">
                        <tr bgcolor="#D6CE93">
                            <td><xsl:value-of select="@ID"/></td>
                            <td><xsl:value-of select="./image"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
                <!--Shopping Cart-->
                <br></br>
                <table border="1">
                    <tr bgcolor="#EFEBCE">
                        <th>Shopping Cart Item</th>
                        <th>Shopping Cart Price</th>
                    </tr>
                    <xsl:for-each select="./artworks/artwork">
                        <tr bgcolor="#D6CE93">
                            <td><xsl:value-of select="./piece"/></td>
                            <td><xsl:value-of select="./shoppingcartPrice"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
                <!--builder-->
                <br></br>
                <table border="1">
                    <tr bgcolor="#EFEBCE">
                        <th>Builder ID</th>
                        <th>Name</th>
                    </tr>
                    <xsl:for-each select="./artworks/artwork/galleries/gallery/builders/builder">
                        <tr bgcolor="#D6CE93">
                            <td><xsl:value-of select="../../@ID"/></td>
                            <td><xsl:value-of select="./name"/></td>
                        </tr>
                    </xsl:for-each>
                    <xsl:for-each select="./artworks/artwork/museums/museum/builders/builder">
                        <tr bgcolor="#D6CE93">
                            <td><xsl:value-of select="../../@ID"/></td>
                            <td><xsl:value-of select="./name"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
                <!--Famous Pieces-->
                <br></br>
                <table border="1">
                    <tr bgcolor="#EFEBCE">
                        <th>ID</th>
                        <th>Famous Piece</th>
                    </tr>
                    <xsl:for-each select="./artworks/artwork/artists/artist/famousArts/famousArt">
                        <tr bgcolor="#D6CE93">
                            <td><xsl:value-of select="../../@ID"/></td>
                            <td><xsl:value-of select="./piece"/></td>
                        </tr>
                    </xsl:for-each>
                    <xsl:for-each select="./artworks/artwork/museums/museum/famousArts/famousArt">
                        <tr bgcolor="#D6CE93">
                            <td><xsl:value-of select="../../@ID"/></td>
                            <td><xsl:value-of select="./piece"/></td>
                        </tr>
                    </xsl:for-each>
                    <xsl:for-each select="./artworks/artwork/galleries/gallery/famousArts/famousArt">
                        <tr bgcolor="#D6CE93">
                            <td><xsl:value-of select="../../@ID"/></td>
                            <td><xsl:value-of select="./piece"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
                <!--Subjects-->
                <br></br>
                <table border="1">
                    <tr bgcolor="#EFEBCE">
                        <th>ID</th>
                        <th>Name</th>
                    </tr>
                    <xsl:for-each select="./artworks/artwork">
                        <tr bgcolor="#D6CE93">
                            <td><xsl:value-of select="@ID"/></td>
                            <td><xsl:value-of select="./piece"/></td>
                        </tr>
                    </xsl:for-each>
                    <xsl:for-each select="./artworks/artwork/artists/artist">
                        <tr bgcolor="#D6CE93">
                            <td><xsl:value-of select="@ID"/></td>
                            <td><xsl:value-of select="./firstname"/><br></br><xsl:value-of select="./lastname"/></td>
                        </tr>
                    </xsl:for-each>
                    <xsl:for-each select="./artworks/artwork/museums/museum">
                        <tr bgcolor="#D6CE93">
                            <td><xsl:value-of select="@ID"/></td>
                            <td><xsl:value-of select="./name"/></td>
                        </tr>
                    </xsl:for-each>
                    <xsl:for-each select="./artworks/artwork/galleries/gallery">
                        <tr bgcolor="#D6CE93">
                            <td><xsl:value-of select="@ID"/></td>
                            <td><xsl:value-of select="./name"/></td>
                        </tr>
                    </xsl:for-each>

                </table>

            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>