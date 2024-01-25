Sub SaveClipboardImageToLocal()
    Dim objData As DataObject
    Set objData = New DataObject

    ' Get data from the Clipboard
    objData.GetFromClipboard

    ' Check if the Clipboard contains an image
    If objData.GetFormat(1) Then
        ' Save the image to a local file
        Open "C:\Path\To\Your\Local\File.jpg" For Binary Access Write As #1
        Put #1, , objData.GetData(1)
        Close #1
    Else
        MsgBox "No image found in the Clipboard.", vbExclamation
    End If
End Sub