<?xml version='1.0' encoding='UTF-8' ?>
<xsl:stylesheet version='1.0' xmlns:xsl='http://www.w3.org/1999/XSL/Transform'>
    <xsl:template match='/'>
        <html>
            <body>
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
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
