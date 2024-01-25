
Sub SaveClipboardImageToLocal()
    ' Create a form with an Image control named "Image0"
    ' Ensure the form is not visible during this process

    ' Open the form
    DoCmd.OpenForm "YourFormName", acNormal, , , , acHidden
    
    ' Paste the Clipboard content into the Image control
    Forms("YourFormName").Controls("Image0").Picture = Forms("YourFormName").ClipboardData(1)

    ' Save the image to a local file
    DoCmd.OutputTo acOutputForm, "YourFormName", acFormatBMP, "C:\Path\To\Your\Local\File.bmp"

    ' Close the form
    DoCmd.Close acForm, "YourFormName"

    MsgBox "Image saved successfully.", vbInformation
End Sub


Sub SaveClipboardImageToLocal()
    Dim objData As MSForms.DataObject
    Set objData = New MSForms.DataObject

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