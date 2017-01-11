Public Class Pago
    Dim meses As Integer
    Private Sub combo(sender As Object, e As EventArgs) Handles ComboBox1.GotFocus

        Dim numero As String = TextBox1.Text
        Dim query As String = "select cuota from socios where numero = " + numero
        Dim sel As New mys()
        Dim resultado = sel.insertar(query)

        Dim query2 As String = "Select * from couta where cuota = '" + resultado.ToString + "'"
        Dim dt As New DataTable
        dt = sel.datos(query2)
        Label3.Text = "la cuota es " + dt.Rows.Item(0).Item("monto").ToString + " por " + dt.Rows.Item(0).Item("meses") + " mes(es)"
        meses = dt.Rows.Item(0).Item("meses")


    End Sub

    Private Sub ComboBox1_SelectedIndexChanged(sender As Object, e As EventArgs) Handles ComboBox1.SelectedIndexChanged
        If meses > ComboBox1.Text Then
            MsgBox("solo se puede pagar mas de los meses de la cuota especifica")

        End If



    End Sub

    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click
        Dim query As String
        query = "select * from socios where numero = " + TextBox1.Text
        Dim dt As New DataTable
        Dim resl As New mys()
        dt = resl.datos(query)

        Dim strFecha = dt.Rows.Item(0).Item("dia").ToString + "/" + dt.Rows.Item(0).Item("mes").ToString + "/" + dt.Rows.Item(0).Item("anio").ToString

        meses = ComboBox1.Text

        Dim fecha As Date = strFecha
        fecha = fecha.AddMonths(meses)
        fecha = fecha.ToShortDateString()
        Dim spltfecha = Split(fecha.ToShortDateString.ToString, "/")
        spltfecha(2) = spltfecha(2).Replace("20", "")
        'MsgBox(spltfecha(2))
        query = "update socios set `dia` =" + spltfecha(0) + ", `mes`= " + spltfecha(1) + ", `anio`= " + spltfecha(2) + " where `numero` =" + TextBox1.Text
        Dim re As New mys()
        re.insertar(query)
        MsgBox("se ha realizado esl pago")
        Me.Close()
    End Sub

    Private Sub TextBox2_keypressed(sender As Object, e As KeyPressEventArgs) Handles TextBox1.KeyPress


        If Asc(e.KeyChar) <> 8 Then
            If Asc(e.KeyChar) < 48 Or Asc(e.KeyChar) > 57 Then
                e.Handled = True
            End If
        End If
    End Sub


End Class