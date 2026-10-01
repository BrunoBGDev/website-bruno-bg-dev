<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Novo contato recebido</title>
</head>

<body
    style="
        margin: 0;
        padding: 0;
        background-color: #f5f5f7;
        font-family: Arial, Helvetica, sans-serif;
        color: #111118;
    "
>

    <div
        style="
            max-width: 600px;
            margin: 40px auto;
            padding: 0 20px;
        "
    >

        <div
            style="
                background-color: #ffffff;
                border: 1px solid #e2e2e8;
                border-radius: 16px;
                overflow: hidden;
            "
        >

            {{-- Cabeçalho --}}
            <div
                style="
                    padding: 30px;
                    background-color: #111118;
                    color: #ffffff;
                "
            >
                <h1
                    style="
                        margin: 0;
                        font-size: 24px;
                    "
                >
                    Novo contato recebido
                </h1>

                <p
                    style="
                        margin: 8px 0 0;
                        color: #a1a1aa;
                        font-size: 14px;
                    "
                >
                    Uma nova mensagem foi enviada pelo seu portfólio.
                </p>
            </div>

            {{-- Conteúdo --}}
            <div style="padding: 30px;">

                <div style="margin-bottom: 24px;">
                    <strong>Nome</strong>

                    <p
                        style="
                            margin: 6px 0 0;
                            color: #666672;
                        "
                    >
                        {{ $contact->name }}
                    </p>
                </div>

                <div style="margin-bottom: 24px;">
                    <strong>E-mail</strong>

                    <p
                        style="
                            margin: 6px 0 0;
                            color: #666672;
                        "
                    >
                        {{ $contact->email }}
                    </p>
                </div>

                <div style="margin-bottom: 24px;">
                    <strong>Assunto</strong>

                    <p
                        style="
                            margin: 6px 0 0;
                            color: #666672;
                        "
                    >
                        {{ $contact->subject }}
                    </p>
                </div>

                <div>
                    <strong>Mensagem</strong>

                    <div
                        style="
                            margin-top: 10px;
                            padding: 16px;
                            background-color: #f5f5f7;
                            border-radius: 10px;
                            color: #44444f;
                            line-height: 1.6;
                        "
                    >
                        {!! nl2br(e($contact->message)) !!}
                    </div>
                </div>

            </div>

            {{-- Footer --}}
            <div
                style="
                    padding: 20px 30px;
                    border-top: 1px solid #e2e2e8;
                    color: #9696a3;
                    font-size: 12px;
                "
            >
                Enviado automaticamente pelo portfólio de Bruno Braga.
            </div>

        </div>

    </div>

</body>

</html>
