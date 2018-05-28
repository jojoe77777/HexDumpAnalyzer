# HexDumpAnalyzer
Allows you to look at the contents of a packet from hex form

# Usage

`/parsehexdump <hex>`
e.g
```
parsehexdump 0x650000c4fb8fd90f056e756c6c0a
object(pocketmine\network\mcpe\protocol\ModalFormResponsePacket)#10156 (7) {
  ["formId"]=>
  int(4213439940)
  ["formData"]=>
  string(5) "null."
  ["isEncoded"]=>
  bool(false)
  ["senderSubId"]=>
  int(0)
  ["recipientSubId"]=>
  int(0)
  ["offset"]=>
  int(14)
  ["buffer"]=>
  string(28) "650000c4fb8fd90f056e756c6c0a"
}
```
