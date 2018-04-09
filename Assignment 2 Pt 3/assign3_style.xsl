<?xml version='1.0' encoding='UTF-8' ?>
<xsl:stylesheet version='1.0' xmlns:xsl='http://www.w3.org/1999/XSL/Transform'>
      <xsl:output version='1.0' encoding='UTF-8' indent='no' method='xml' />

      <xsl:template match='/'>
  <FMPXMLRESULT xmlns="http://www.filemaker.com/fmpxmlresult">
  <ERRORCODE>0</ERRORCODE>
  <PRODUCT BUILD="11/13/2002" NAME="FileMaker Pro" VERSION="6.0v4"/>
  <DATABASE DATEFORMAT="M/d/yyyy" LAYOUT="" NAME="artworks.FP5" RECORDS="" TIMEFORMAT="h:mm:ss a"/>
  <METADATA>
                          <FIELD EMPTYOK="YES" MAXREPEAT="1" NAME="ArtworkID" TYPE="NUMBER"/>
                          <FIELD EMPTYOK="YES" MAXREPEAT="1" NAME="Piece" TYPE="NUMBER"/>
                          <FIELD EMPTYOK="YES" MAXREPEAT="1" NAME="Type" TYPE="DATE"/>
                          <FIELD EMPTYOK="YES" MAXREPEAT="1" NAME="Dimension" TYPE="NUMBER"/>
                           <FIELD EMPTYOK="YES" MAXREPEAT="1" NAME="Year" TYPE="NUMBER"/>
                            <FIELD EMPTYOK="YES" MAXREPEAT="1" NAME="Price" TYPE="NUMBER"/>
                             <FIELD EMPTYOK="YES" MAXREPEAT="1" NAME="Firstname" TYPE="NUMBER"/>
                              <FIELD EMPTYOK="YES" MAXREPEAT="1" NAME="Lastname" TYPE="NUMBER"/>
                               <FIELD EMPTYOK="YES" MAXREPEAT="1" NAME="Location" TYPE="NUMBER"/>
  </METADATA>
  <RESULTSET FOUND="">
        <xsl:for-each select="./artworks/artwrork">
              <ROW MODID="" RECORDID="">
                      <COL><DATA><xsl:value-of select="@ID" /></DATA></COL>
                      <COL><DATA><xsl:value-of select="./piece"/></DATA></COL>
                      <COL><DATA><xsl:value-of select="./firstname" /></DATA></COL>
                      <COL><DATA><xsl:value-of select="./lastname" /></DATA></COL>
                      <COL><DATA><xsl:value-of select="./type" /></DATA></COL>
                      <COL><DATA><xsl:value-of select="./dimension" /></DATA></COL>
                      <COL><DATA><xsl:value-of select="./year" /></DATA></COL>
                      <COL><DATA><xsl:value-of select="./price" /></DATA></COL>
                      <COL><DATA><xsl:value-of select="./location" /></DATA></COL>
                      <COL><DATA><xsl:value-of select="./shoppingcart" /></DATA></COL>
                      <COL><DATA><xsl:value-of select="./genre" /></DATA></COL>
                      <COL><DATA><xsl:value-of select="./image" /></DATA></COL>
              </ROW>
        </xsl:for-each>
 </RESULTSET>
 </FMPXMLRESULT>
      </xsl:template>

</xsl:stylesheet>

